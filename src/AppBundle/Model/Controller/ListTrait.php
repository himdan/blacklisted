<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 20/09/18
 * Time: 18:17
 */

namespace AppBundle\Model\Controller;

use AppBundle\Model\IPaginate;

trait ListTrait
{
    protected static $crudModel;

    /**
     * @param Paginator $paginator
     * @return mixed
     */
    protected function readObjects(IPaginate $paginator, $withPagination = false)
    {
        $objectSet = $paginator->paginate(static::$crudModel, [], true);
        return ($withPagination)?$objectSet:$objectSet['data'];
    }

    /**
     * @param Paginator $paginator
     * @return mixed
     */
    protected function readJson(IPaginate $paginator, $withPagination = false)
    {
        $objectSet = $paginator->paginate(static::$crudModel, [], false);
        return ($withPagination)?$objectSet:$objectSet['data'];
    }
}
