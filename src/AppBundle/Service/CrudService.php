<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/02/19
 * Time: 09:16 ص
 */

namespace AppBundle\Service;


use AppBundle\Exception\ValidationException;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\Form\FormFactoryInterface;
use Symfony\Component\Form\FormInterface;

class CrudService
{
    /**
     * @var EntityManagerInterface $em
     */
    protected $em;
    /**
     * FQCN
     * @var string $entity
     *
     */
    protected $entity;
    /**
     * FQCN
     * @var string $type
     */
    protected $type;
    /**
     * @var FormFactoryInterface $formFactory
     */
    protected $formFactory;


    public function __construct(EntityManagerInterface $em, FormFactoryInterface $factory)
    {
        $this->em = $em;
        $this->formFactory = $factory;
    }

    /**
     * @param string $entity
     * @return CrudService
     */
    public function setEntity($entity)
    {
        $this->entity = $entity;
        return $this;
    }

    /**
     * @param string $type
     * @return CrudService
     */
    public function setType($type)
    {
        $this->type = $type;
        return $this;
    }

    /**
     * @param $data
     * @param $successCallbackFn
     * @param $errorCallbackFn
     */
    public function create($data,$successCallbackFn, $errorCallbackFn)
    {
        $instance = new $this->entity;
        $form = $this->formFactory->create($this->type, $instance);
        $this->createOrUpdate($form, $instance, $successCallbackFn, $errorCallbackFn, $data);

    }

    /**
     * @param $instance
     * @param $data
     * @param $successCallbackFn
     * @param $errorCallbackFn
     */
    public function patch($instance, $data, $successCallbackFn, $errorCallbackFn)
    {
        $form = $this->formFactory->create($this->type, $instance);
        $form->submit($data, false);
        $this->createOrUpdate($form, $instance, $successCallbackFn, $errorCallbackFn, $data, true);
    }

    public function delete($instance, $successCallback, $errorCallbackFn)
    {
        try{
            $this->em->remove($instance);
            if(is_callable($successCallback)) $successCallback();
        } catch (\Exception $e){
            if(is_callable($errorCallbackFn)) $errorCallbackFn($e);
        }
    }

    /**
     * @param $form
     * @param $instance
     * @param $successCallbackFn
     * @param $errorCallbackFn
     * @param $data
     * @param bool $clearMissing
     */
    private function createOrUpdate(FormInterface $form, $instance, $successCallbackFn, $errorCallbackFn, $data, $clearMissing=false)
    {
        try{
            $form->submit($data, $clearMissing);
            if($form->isValid()) {
                $this->em->persist($instance);
                $this->em->flush();
                if(is_callable($successCallbackFn)) $successCallbackFn($instance);
            } else {
                throw new ValidationException($form->getErrors());
            }
        } catch (\Exception $e) {
            if(is_callable($errorCallbackFn)) $errorCallbackFn($e);
        }
    }


}