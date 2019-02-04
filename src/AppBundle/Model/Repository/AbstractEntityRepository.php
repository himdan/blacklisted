<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 14:12
 */

namespace AppBundle\Model\Repository;

use AppBundle\Model\ISearch;
use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder as Builder;

abstract class AbstractEntityRepository extends EntityRepository implements ISearch
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

    /**
     * Build Query and  override for every single repository
     * @param Builder $qb
     * @param $data
     * @param bool $countOnly
     * @return mixed
     */
    abstract protected function populateQb(Builder $qb, $data, $countOnly = false);
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
        $qb = $this->_em->createQueryBuilder();
        $this->populateQb($qb, $data, $countOnly);
        if ($length) {
            $qb
                ->setFirstResult($start * $length)
                ->setMaxResults($length);
        }
        $qb->orderBy($sortColumn, $sortOrder);
        return $qb->getQuery();
    }
}
