<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 05/02/19
 * Time: 11:15 ص
 */

namespace AppBundle\Service;


use AppBundle\Model\ISearch;
use AppBundle\Model\Service\AbstractPaginator;

class Paginator extends AbstractPaginator
{
    protected function getPaginationParams()
    {
        // TODO: Implement getPaginationParams() method.
    }

    protected function getOrderParams(ISearch $repository, $orderSet)
    {
        // TODO: Implement getOrderParams() method.
    }

    protected function getFilters(ISearch $repository, $filters)
    {
        // TODO: Implement getFilters() method.
    }

}