<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 13:48
 */

namespace AppBundle\Model;

interface IPaginate
{
    public function paginate(
        $repositoryClass,
        $filters = array(),
        $getObj = false,
        $injectFilter = false,
        $orderSet = 0
    );
}
