<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/09/18
 * Time: 21:16
 */

namespace AppBundle\Model\Controller;

use Doctrine\Common\Persistence\ObjectManager;
use AppBundle\Model\IJson;
use AppBundle\Service\Paginator;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\Form\FormInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

abstract class MegatronicCrudController extends Controller implements ICrud
{
    use CrudTrait;
    use ListTrait;

    public function listAction(Paginator $paginator)
    {
        try {
            $data = $this->readJson($paginator, true);
            return $this->handleSuccess($data);
        } catch (\Exception $e) {
            return $this->handleException($e);
        }
    }
    /**
     * @param Request $request
     * @return mixed
     */
    public function createAction(Request $request)
    {

        return $this->create($request);
    }

    /**
     * @param $id
     * @param Request $request
     * @return mixed
     */
    public function updateAction($id, Request $request)
    {
        /**
         *  we resolve it without param conventer
         */
        $object = $this->getObjectManager()->find(static::$crudModel, $id);
        return $this->update($object, $request);
    }

    /**
     * @param $id
     * @return mixed
     */
    public function deleteAction($id)
    {
        /**
         *  we resolve it without param conventer
         */
        $object = $this->getObjectManager()->find(static::$crudModel, $id);
        return $this->delete($object);
    }
    public function patchAction($id, Request $request)
    {
        /**
         *  we resolve it without param conventer
         */
        $object = $this->getObjectManager()->find(static::$crudModel, $id);
        return $this->patch($request->request->all(), $object);
    }

    /**
     * Override to implement the way how to handle Exception
     * @param \Exception $e
     * @return Response
     */
    abstract protected function handleException(\Exception $e);

    /**
     * Overrid to implement the way to handle invalid data and failed Constraint
     * @return Response
     */
    abstract protected function handleInvalid(FormInterface $form);
    /**
     * Overrid to implement the way to handle success Response
     * @return Response
     */
    abstract protected function handleSuccess($object = null);

    /**
     * Manager abstraction Layer
     * @return ObjectManager
     */
    abstract protected function getObjectManager();

    /**
     * @param null $object
     * @return array|null
     */
    public function parseObjectAsJson($object = null)
    {
        $data = [];
        if (is_array($object)) {
            $data = $object;
        } elseif ($object instanceof IJson) {
            $data = $object->toJson();
        }
        return $data;
    }
}
