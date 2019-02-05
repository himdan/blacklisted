<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 31/07/18
 * Time: 13:54
 */

namespace AppBundle\Model\Service;

use AppBundle\Model\IPaginate;
use AppBundle\Model\ISearch;
use Doctrine\Common\Persistence\ObjectManager;
use Doctrine\Common\Persistence\ObjectRepository;

abstract class AbstractPaginator implements IPaginate
{

    const LENGTH_PARAMS = 'length';
    const START_PARAMS = 'start';
    const ORDER_COLUMN_PARAM = 'orderColumn';
    const ORDER_DIRECTION_PARAM = 'orderDirection';
    const FILTERED_COUNT = "recordsFiltered";
    const TOTAL_COUNT = "recordsTotal";

    /**
     * @var ObjectManager
     */
    protected $om;
    public function __construct(ObjectManager $om)
    {
        $this->om = $om;
    }

    public function paginate(
        $metaClassName,
        $filters = array(),
        $getObj = false,
        $injectFilter = false,
        $orderSet = 0
    ) {
        /**
         * @var ISearch $repository
         */
        $repository = $this->om->getRepository($metaClassName);
        $this->checkRepository($repository);

        $filters = ($injectFilter) ? $filters : $this->getFilters($repository, $filters);
        $orderParams = $this->getOrderParams($repository, $orderSet);

        $orderColumn = $orderParams['orderColumn'];
        $orderDirection = $orderParams['orderDirection'];

        $pagination_params = $this->getPaginationParams();

        $length = $pagination_params['length'];
        $start = $pagination_params['start'];

        return $repository->search($filters, $orderColumn, $orderDirection, $start, $length, $getObj);
    }

    private function checkRepository(ObjectRepository $repository)
    {
        if (!$repository instanceof ISearch) {
            throw new \InvalidArgumentException(
                sprintf(
                    "the classe %s have to implement %s interface",
                    get_class($repository),
                    ISearch::class
                )
            );
        }
    }

    abstract protected function getPaginationParams();
    abstract protected function getOrderParams(ISearch $repository, $orderSet);
    abstract protected function getFilters(ISearch $repository, $filters);
}
