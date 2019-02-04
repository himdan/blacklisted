<?php
/**
 * Created by PhpStorm.
 * User: mohamed
 * Date: 04/02/19
 * Time: 10:57 ص
 */

namespace AppBundle\Tests\Service;


use AppBundle\Entity\Category;
use AppBundle\Entity\Claim;
use AppBundle\Exception\ValidationException;
use AppBundle\Form\ClaimType;
use AppBundle\Service\CrudService;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Test\KernelTestCase;

class crudServiceTest extends  KernelTestCase
{

    /**
     * @var CrudService $crudService
     */
    protected  $crudService;
    /**
     * @var EntityManagerInterface $entityManager
     */
    protected  $entityManager;
    protected function setUp()
    {
        self::bootKernel();
        $this->crudService = static::$kernel->getContainer()
            ->get('bl_crud_service')
        ;
        $this->entityManager = static::$kernel->getContainer()
            ->get('doctrine')
            ->getManager()
        ;
    }


    public function testCreate(){
        $categoryRepository = $this->entityManager->getRepository(Category::class);
        $category = $categoryRepository->findOneBy(['id'=>1]);
        $data = array(
          'title' => 'test claim',
          'description' => 'in other description',
          'isService' => 1,
          'category' => $category->getId(),
        );
        $this->crudService
            ->setEntity(Claim::class)
            ->setType(ClaimType::class)
            ->create($data, function($claim){
                $this->assertNotNull($claim->getId());
            }, function ($e){
                $this->assertNull($e->getMessage());
            });
    }

}