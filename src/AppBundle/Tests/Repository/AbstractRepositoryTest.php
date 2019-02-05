<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 05/02/19
 * Time: 10:21 ص
 */

namespace AppBundle\Tests\Repository;


use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class AbstractRepositoryTest extends KernelTestCase
{
    /**
     * @var EntityManagerInterface $entityManager
     */
    protected  $entityManager;

    protected function setUp()
    {
        self::bootKernel();
        $this->entityManager = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
    }
}