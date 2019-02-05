<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 14:31
 */

namespace AppBundle\Model\Repository;

use AppBundle\Model\IJson;

trait SearchTrait
{


    protected $columnMaps = [];
    protected $filterableFields = [];
    /**
     * @param $filters
     * @param $sortColumn
     * @param string $sortOrder
     * @param int $page
     * @param null $max
     * @param bool $getObj
     * @return array
     */
    public function search($filters, $sortColumn, $sortOrder = 'asc', $page = 0, $max = null, $getObj = false)
    {
        $recordsTotal = $this->simpleCount([]);
        if (count(array_filter($filters))) {
            $recordsFiltered = $this->simpleCount($filters);
        } else {
            $recordsFiltered = $recordsTotal;
        }

        $data = array();
        foreach ($this->buildSearchQuery($filters, $sortColumn, $sortOrder, $page, $max)->execute() as $result) {
            $data[] = ($getObj) ? $result : $this->toJson($result);
        }
        return compact('data', 'recordsFiltered', 'recordsTotal', 'filters');
    }
    /**
     * Build the column map for sorting
     */
    protected function buildColumnMap()
    {
        $classMetaData = $this->getClassMetadata();
        $this->columnMaps[0] = 'id';
        foreach ($classMetaData->fieldMappings as $fieldName => $meta) {
            if (!isset($meta['type']) || "string" === strtolower($meta['type']) || "integer" === strtolower($meta['type'])) {
                //case senstive and equal
                $this->columnMaps[$fieldName] = $fieldName;
                // case insenstive and like
                $genericIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::CASE_UNSENSITIVE));
                $this->columnMaps[$genericIndex] = $fieldName;
                // case simple like
                $likeIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::LIKE_UNSENSITIVE));
                $this->columnMaps[$likeIndex] = $fieldName;
            }
            //collection type
            if ("collection" === strtolower($meta['type'])) {
                $inIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::IN_SET));
                $this->columnMaps[$inIndex] = $fieldName;
            }
        }
        foreach ($classMetaData->associationMappings as $fieldName => $meta) {
            $isReference = $meta['reference'] === true;
            $isOne = $meta['association'] === ClassMetadataInfo::REFERENCE_ONE;
            if ($isReference&&$isOne) {
                $genericIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::REFERENCE_IN));
                $this->columnMaps[$genericIndex] = $fieldName;
            }
        }
    }

    /**
     * Build filter field in order
     * to change the accepted value
     * from the filering stack
     */
    protected function buildFiltrableFields()
    {
        $classMetaData = $this->getClassMetadata();
        foreach ($classMetaData->fieldMappings as $fieldName => $meta) {
            // meta type string case
            if (!isset($meta['type']) || "string" === strtolower($meta['type']) || "integer" === strtolower($meta['type'])) {
                //case senstive and equal
                $this->filterableFields[$fieldName] = self::EMPTY_SET;
                // case insenstive and like
                $genericIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::CASE_UNSENSITIVE));
                $this->filterableFields[$genericIndex] = self::EMPTY_SET;
                // case simple like
                $likeIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::LIKE_UNSENSITIVE));
                $this->filterableFields[$likeIndex] = self::EMPTY_SET;
            }
            //meta type date case
            if ("date" === strtolower($meta['type'])) {
                // case Equal
                $this->filterableFields[$fieldName] = self::EMPTY_SET;
                //case low or equals
                $letIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::LOWER_EQUAL));
                $this->filterableFields[$letIndex] = self::EMPTY_SET;
                //case  lower then
                $ltIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::LOWER_THAN));
                $this->filterableFields[$ltIndex] = self::EMPTY_SET;
                //case greater or equal
                $getIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::GREATER_EQUAL));
                $this->filterableFields[$getIndex] = self::EMPTY_SET;
                $gtIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::GREATER_THAN));
                $this->filterableFields[$gtIndex] = self::EMPTY_SET;
            }
            //meta type collection
            if ("collection" === strtolower($meta['type'])) {
                $genericIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::IN_SET));
                $this->filterableFields[$genericIndex] = self::EMPTY_SET;
            }
        }
        foreach ($classMetaData->associationMappings as $fieldName => $meta) {
            $isReference = $meta['reference'] === true;
            $isOne = $meta['association'] === ClassMetadataInfo::REFERENCE_ONE;
            if ($isReference&&$isOne) {
                $genericIndex = sprintf('%s%s', $fieldName, $this->buildSuffix(self::REFERENCE_IN));
                $this->filterableFields[$genericIndex] = self::EMPTY_SET;
            }
        }
    }
    /**
     * @param $object
     * @return array
     */
    public function toJson($object)
    {
        if ($object instanceof IJson) {
            return $object->toJson();
        } else {
            return [];
        }
    }

    /**
     * @return mixed
     */
    public function getFilterableFields()
    {
        return $this->filterableFields;
    }

    public function getFiltrableFieldMap($index)
    {
        return(array_key_exists($index, $this->filterableFields))?$this->filterableFields[$index]:'';
    }

    /**
     * @param $index
     * @param int $mapIndex
     * @return mixed
     */
    public function getOrderColumn($index)
    {
        return(array_key_exists($index, $this->columnMaps))?$this->columnMaps[$index]:$this->columnMaps[0];
    }

    /**
     * @param array $filter
     * @return array
     */
    public function simpleSearch($filter = [])
    {
        return $this->search($filter, $this->getOrderColumn(0));
    }

    /**
     * @param array $filter
     * @return array
     */
    public function simpleObjectSearch($filter = [])
    {
        return $this->search($filter, $this->getOrderColumn(0), 'asc', 0, null, true);
    }

    /**
     * @param array $filter
     * @return mixed
     */
    public function simpleCount($filter = [])
    {
        return  $this->buildSearchQuery($filter, $this->getOrderColumn(0), 'asc', 0, null, true)->execute();
    }

    /**
     * @param $suffixEnd
     * @return string
     */
    protected function buildSuffix($suffixEnd)
    {
        return sprintf('%s%s', self::DELIMTER, $suffixEnd);
    }

    /**
     * @param $fieldName
     * @param $mapedSuffix
     * @return bool
     */
    protected function isMappedFilter($fieldName, $mapedSuffix)
    {
        return false !== strpos($fieldName, $mapedSuffix);
    }
}
