<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 13:42
 */

namespace AppBundle\Model;

interface ISearch
{

    public function search($filters, $orderColumn, $orderDirection, $start, $length, $getObj);
    public function buildSearchQuery($data = [], $sortColumn, $sortOder = 'asc', $start = 0, $length = null, $countOnly = false);
    public function getFilterableFields();
    public function getOrderColumn($index);
}
