<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/09/18
 * Time: 22:40
 */

namespace AppBundle\Model\Controller;

use Symfony\Component\HttpFoundation\Request;

interface ICrud
{
    function create(Request $request);
    function patch($data, $modelInstance);
    function update($modelInstance, Request $request);
    function deleteAction($id);
}
