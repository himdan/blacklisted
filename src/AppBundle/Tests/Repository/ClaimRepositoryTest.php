<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 05/02/19
 * Time: 10:25 ص
 */

namespace AppBundle\Tests\Repository;

use AppBundle\Entity\Claim;

class ClaimRepositoryTest extends AbstractRepositoryTest
{

    /**
     *
     */
    public function testBuildSearchQueryPass()
    {
        $repository = $this->entityManager->getRepository(Claim::class);
        $filter = [
            'categoryTitle' => 'Software',
            'accountUsername' => 'admin'
        ];
        $result = $repository
            ->buildSearchQuery($filter, $repository->getOrderColumn(0), 'ASC', 0, 15)
            ->execute()
            ;
        $this->assertGreaterThan(0, count($result));
        $this->assertLessThan(15, count($result));
    }

    /**
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function testBuildSearchQueryCountPass()
    {
        $repository = $this->entityManager->getRepository(Claim::class);
        $filter = [
            'categoryTitle' => 'Software'
        ];
        $result = $repository
            ->buildSearchQuery($filter, $repository->getOrderColumn(0), 'ASC', 0, 15, true)
            ->getSingleScalarResult()
        ;
        $this->assertGreaterThan(0, $result);
        $this->assertLessThan(15, $result);
    }

    /**
     * @throws \Doctrine\ORM\NoResultException
     * @throws \Doctrine\ORM\NonUniqueResultException
     */
    public function testBuildSearchQueryCountFail()
    {
        $repository = $this->entityManager->getRepository(Claim::class);
        $filter = [
            'categoryTitle' => 'XSoftware'
        ];
        $result = $repository
            ->buildSearchQuery($filter, $repository->getOrderColumn(0), 'ASC', 0, 15, true)
            ->getSingleScalarResult()
        ;
        $this->assertEquals(0, $result);
    }
}
