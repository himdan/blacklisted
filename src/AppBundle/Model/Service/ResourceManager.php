<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 12:33
 */

namespace AppBundle\Model\Service;

use AppBundle\Model\IResourceManager;
use Doctrine\Common\Persistence\ObjectManager;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Validator\Exception\ValidatorException;

abstract class ResourceManager implements IResourceManager
{

    /**
     * @var ObjectManager $objectManager
     */
    protected $objectManager;
    /**
     * @var FormFactoryInterface
     */
    protected $formFactory;
    protected $resource;
    protected $modelClass;
    protected $modelType;
    protected $modelInstance;
    public function __construct(ObjectManager $objectManager, FormFactoryInterface $formFactory)
    {

        $this->objectManager = $objectManager;
        $this->formFactory = $formFactory;
    }

    /**
     * @param $resource
     * @return $this
     */
    public function setResouce($resource)
    {
        $this->resource = $resource;
        return $this;
    }

    public function getResource()
    {
        return $this->resource;
    }

    public function setModelClass($className)
    {
        $this->modelClass = $className;
        return $this;
    }

    public function getModelClass()
    {
        return $this->modelClass;
    }

    /**
     * @return mixed
     */
    public function getModelType()
    {
        return $this->modelType;
    }

    /**
     * @return mixed
     */
    public function getModelInstance()
    {
        return $this->modelInstance;
    }

    /**
     * @param mixed $modelInstance
     * @return ResourceManager
     */
    public function setModelInstance($modelInstance)
    {
        $this->modelInstance = $modelInstance;
        return $this;
    }

    /**
     * @param mixed $modelType
     * @return ResourceManager
     */
    public function setModelType($modelType)
    {
        $this->modelType = $modelType;
        return $this;
    }


    /**
     *
     */
    public function create()
    {
        $modelInstance = $this->resolve($this->resource);
        $this->createOrUpdate($modelInstance);
    }

    public function update($modelInstance)
    {
        $modelData = $this->resolve($this->resource);
        $this->createOrUpdate($modelInstance, $modelData);
    }

    public function delete($modelInstance)
    {
        $this->objectManager->remove($modelInstance);
        $this->objectManager->flush();
    }

    protected function createOrUpdate($modelInstance, $modelData = null)
    {
        $modelForm = $this->formFactory->create($this->modelType, $modelInstance);
        if (is_null($modelData)) {
            $modelForm->submit($modelInstance);
        } else {
            $modelForm->submit($modelData);
        }

        if ($modelForm->isSubmitted() && $modelForm->isValid()) {
            $this->objectManager->persist($modelInstance);
            $this->objectManager->flush();
            $this->setModelInstance($modelInstance);
        } else {
            $validatorException = new ValidatorException();
            throw $validatorException;
        }
    }

    abstract protected function resolve($resource);
}
