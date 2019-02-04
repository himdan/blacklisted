<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 12:34
 */

namespace AppBundle\Model;

interface IResourceManager
{

    public function create();
    public function update($modelInstance);
    public function delete($modelInstance);
}
