<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/02/19
 * Time: 02:29 م
 */

namespace AppBundle\Repository;


use Doctrine\ORM\EntityRepository;
use Doctrine\ORM\QueryBuilder;

abstract class AppRepository extends EntityRepository
{

    public function search($data=[],$orderSet=[],$paginationSet=[])
    {

    }

    /**
     * @return QueryBuilder
     */
    protected function getQueryBuilder()
    {
        $qb = $this->createQueryBuilder();

    }
}