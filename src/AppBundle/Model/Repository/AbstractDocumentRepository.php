<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 14:06
 */

namespace AppBundle\Model\Repository;

use Doctrine\MongoDB\Query\Builder;
use Doctrine\ODM\MongoDB\DocumentManager;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadata;
use Doctrine\ODM\MongoDB\Mapping\ClassMetadataInfo;
use Doctrine\ODM\MongoDB\UnitOfWork;
use AppBundle\Model\ISearch;
use Doctrine\ODM\MongoDB\DocumentRepository;

abstract class AbstractDocumentRepository extends DocumentRepository implements ISearch
{

    use SearchTrait;
    const EMPTY_SET = 'empty';
    const DELIMTER = '_';
    /**
     * SUFFIX agregat
     */
    const CASE_UNSENSITIVE = 'like';
    const LIKE_UNSENSITIVE = 'gen';
    const IN_SET = 'in';
    const LOWER_EQUAL = 'let';
    const LOWER_THAN = 'lt';
    const GREATER_EQUAL = 'get';
    const GREATER_THAN = 'gt';
    const REFERENCE_IN = 'refIn';

    public function __construct(DocumentManager $dm, UnitOfWork $uow, ClassMetadata $classMetadata)
    {
        parent::__construct($dm, $uow, $classMetadata);
        $this->buildFiltrableFields();
        $this->buildColumnMap();
    }

    /**
     * override to change how you filter your records
     * @param Builder $qb
     * @param $data
     */
    protected function populateQb(Builder $qb, $data)
    {
        foreach ($data as $fieldName => $fieldValue) {
            if (!array_key_exists($fieldName, $this->filterableFields)) {
                continue;
            }
            if (isset($fieldValue)) {
                if ($this->isMappedFilter($fieldName, $this->buildSuffix(self::CASE_UNSENSITIVE))) {
                    // case insensitive
                    $qb
                        ->field($this->getOrderColumn($fieldName))
                        ->equals(new \MongoRegex('/'.$fieldValue.'/i'));
                } elseif ($this->isMappedFilter($fieldName, $this->buildSuffix(self::LIKE_UNSENSITIVE))) {
                    // case insensitive and generic
                    $qb
                        ->field($this->getOrderColumn($fieldName))
                        ->equals(new \MongoRegex('/.*'.$fieldValue.'.*/i'));
                } elseif ($this->isMappedFilter($fieldName, $this->buildSuffix(self::IN_SET)) && is_array($fieldValue)) {
                    // case collection attribute
                    $qb
                        ->field($this->getOrderColumn($fieldName))
                        ->in($fieldValue);
                } elseif ($this->isMappedFilter($fieldName, $this->buildSuffix(self::REFERENCE_IN))&& is_array($fieldValue)) {
                    //case reference one with criteria
                    $prop = (explode(self::DELIMTER, $fieldName))[0];
                    try {
                        $associatedRepository = $this->resolveRepositoryByPropertyName($prop);
                        $ids = $associatedRepository->filterIdsByCriteria($fieldValue);
                    } catch (\Exception $exception) {
                        $ids = [];
                    }
                    $qb
                        ->field(sprintf('%s.id', $prop))
                        ->in($ids);
                } else {
                    //perfect match
                    $qb
                        ->field($this->getOrderColumn($fieldName))
                        ->equals($fieldValue);
                }
            }
        }
    }

    /**
     * @param array $data
     * @param $sortColumn
     * @param string $sortOrder
     * @param int $start
     * @param null $length
     * @param bool $countOnly
     * @return mixed
     */
    public function buildSearchQuery($data = [], $sortColumn, $sortOrder = 'asc', $start = 0, $length = null, $countOnly = false)
    {
        $qb = $this->createQueryBuilder()->eagerCursor(true);
        $this->populateQb($qb, $data);
        if ($countOnly) {
            $qb->count();
        }
        if ($length) {
            $qb
                ->limit($length)
                ->skip($start * $length);
        }
        $qb->sort($sortColumn, $sortOrder);
        return $qb->getQuery();
    }

    /**
     * @param $property
     * @return mixed
     */
    public function resolveMetaByPropertyName($property)
    {
        $classMetaData = $this->getClassMetadata();
        $meta = $classMetaData->associationMappings[$property];
        return $meta['targetDocument'];
    }

    /**
     * @param $property
     * @return AbstractDocumentRepository
     * @throws \Exception
     */
    public function resolveRepositoryByPropertyName($property)
    {
        $className = $this->resolveMetaByPropertyName($property);
        $repository = $this->dm->getRepository($className);
        if (!($repository instanceof AbstractDocumentRepository)) {
            throw new \Exception(sprintf('%s must extend AbstractDocumentRepository', $this->getClassName($repository)));
        }

        return $repository;
    }

    /**
     * @param $filters
     * @return array
     */
    public function filterIdsByCriteria($filters)
    {
        $qb = $this->createQueryBuilder()->eagerCursor(true);
        $this->populateQb($qb, $filters);
        $q = $qb->getQuery();
        $ids = [];
        foreach ($q->execute() as $object) {
            if (method_exists($object, 'getId')) {
                array_push($ids, $object->getId());
            }
        }
        return $ids;
    }
}
