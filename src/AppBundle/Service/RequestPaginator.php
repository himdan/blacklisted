<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 05/02/19
 * Time: 05:23 م
 */

namespace AppBundle\Service;


use AppBundle\Model\ISearch;
use Doctrine\Common\Persistence\ObjectManager;
use JMS\Serializer\Serializer;
use Symfony\Component\HttpFoundation\Request;

class RequestPaginator extends Paginator
{


    /**
     * @var  Serializer $serializer
     */
    protected  $serializer;
    /**
     * @var Request $request
     */
    protected  $request;

    public function __construct(ObjectManager $om, Request $request)
    {
        parent::__construct($om);
        $this->request = $request;
    }

    /**
     * @param $metaClassName
     * @param array $filters
     * @param bool $getObj
     * @param bool $injectFilter
     * @param int $orderSet
     * @return mixed
     */

    public function paginate($metaClassName, $filters = array(), $getObj = false, $injectFilter = false, $orderSet = 0)
    {
        $result = parent::paginate($metaClassName, $filters, $getObj, $injectFilter, $orderSet);
        return $this->serializer->serialize($this->parseResult($result), 'json');
    }

    /**
     * @param $result
     * @return mixed
     */
    protected function parseResult($result)
    {
        $resultStd = new \stdClass();
        $resultStd->data = $result['data'];
        $resultStd->recordsFiltered = $result['recordsFiltered'];
        $resultStd->recordsTotal = $result['recordsTotal'];
        $resultStd->filters = $result['filters'];
        return $result;
    }

    public function setSerializer(Serializer $serializer)
    {
        $this->serializer = $serializer;
    }

    public function getPaginationParams()
    {
        $length = $this->request->get('length');
        $length = $length && $length >= 0 ? $length : 0;

        $start = $this->request->get('start');
        $start = $length ? ($start && ($start != -1) ? $start : 0) / $length : 0;

        return compact('start', 'length');
    }

    public function getOrderParams(ISearch  $repository, $orderSet = 0)
    {

        $order = $this->request->get('order', array(array('column' => 0, 'dir' => 'asc')));

        $orderColumn    = $repository->getOrderColumn($order[0]['column'], $orderSet);
        $orderDirection = $order[0]['dir'];

        return compact('orderColumn', 'orderDirection');
    }

    public function getFilters(ISearch $repository, $filters = [])
    {
        foreach ($repository->getFilterableFields() as $fieldName => $allValues) {
            $valueFromRequest = $this->request->get($fieldName);
            if (!$valueFromRequest || 0 === strcasecmp($valueFromRequest, $allValues)) {
                $fieldValue = null;
            } else {
                $fieldValue = $valueFromRequest;
            }
            $filters[$fieldName] = $fieldValue;
        }
        return $filters;
    }
}