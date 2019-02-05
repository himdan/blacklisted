<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 05/02/19
 * Time: 11:53 ص
 */

namespace AppBundle\Tests\Service;


use AppBundle\Entity\Claim;
use AppBundle\Service\Paginator;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class PaginatorTest extends KernelTestCase
{
    /**
     * @var Paginator
     */
    protected $paginator;
    public function setUp()
    {
        self::bootKernel();
        $this->paginator = static::$kernel->getContainer()
            ->get('bl_paginator')
        ;
    }

    public function testSearch()
    {
        $result = $this->paginator
            ->setPaginationParams([Paginator::START_PARAMS =>0,Paginator::LENGTH_PARAMS=>1])
            ->paginate(Claim::class, ['categoryTitle' => 'Software']);
        $isDataSet = array_key_exists('data', $result);
        $isRecordTotalSet = array_key_exists(Paginator::TOTAL_COUNT, $result);
        $this->assertTrue($isDataSet);
        $this->assertTrue($isRecordTotalSet);
        $this->assertGreaterThan(0, $result[Paginator::TOTAL_COUNT]);
    }
}