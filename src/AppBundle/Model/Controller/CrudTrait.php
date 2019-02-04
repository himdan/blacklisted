<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/09/18
 * Time: 21:21
 */

namespace AppBundle\Model\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;

trait CrudTrait
{

    protected static $crudModel;
    protected static $crudType;

    /**
     * @param Request $request
     * @return mixed
     */
    public function create(Request $request)
    {
        $modelInstance = new static::$crudModel;
        /**
         * @var FormInterface $modelForm
         */
        $modelForm =  $this->createForm(static::$crudType, $modelInstance);
        $modelForm->handleRequest($request);
        if ($modelForm->isValid() && $modelForm->isSubmitted()) {
             return $this->saveData($modelInstance);
        } else {
            return $this->handleInvalid($modelForm);
        }
    }

    /**
     * @param $data
     * @param $modelInstance
     * @return mixed
     */
    public function patch($data, $modelInstance)
    {
        /**
         * @var FormInterface $modelForm
         */
        $modelForm =  $this->createForm(static::$crudType, $modelInstance);
        $modelForm->submit($data, false);
        if ($modelForm->isValid() && $modelForm->isSubmitted()) {
            return $this->saveData($modelInstance);
        } else {
            return $this->handleInvalid($modelForm);
        }
    }

    /**
     * @param $modelInstance
     * @param Request $request
     * @return mixed
     */
    public function update($modelInstance, Request $request)
    {
        /**
         * @var FormInterface $modelForm
         */
        $modelForm =  $this->createForm(static::$crudType, $modelInstance);
        $modelForm->handleRequest($request);
        if ($modelForm->isValid() && $modelForm->isSubmitted()) {
            return $this->saveData($modelInstance);
        } else {
            $this->handleInvalid($modelForm);
        }
    }

    /**
     * @param $object
     * @return mixed
     */
    public function delete($object)
    {
        /**
         * @var ObjectManager $oM
         */
        $oM= $this->getObjectManager();
        $oM->persist($object);
        try {
            $oM->flush();
            return $this->handleSuccess($object);
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }

    /**
     * @param $object
     * @return mixed
     */
    private function saveData($object)
    {
        /**
         * @var ObjectManager $oM
         */
        $oM= $this->getObjectManager();
        $oM->remove($object);
        try {
            $oM->flush();
            return $this->handleSuccess($object);
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }
}
