<?php

namespace MobileBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Category;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\View;

class CategoriesController extends FosRestController
{
    public function getCategoriesAction(){
        $categories=$this->getDoctrine()->getRepository("AppBundle:Category")->findAll();
        $view=$this->view($categories,200,array('Access-Control-Allow-Origin'=>'*'))
            ->setTemplate("MobileBundle:Categories:categories.html.twig")
            ->setTemplateVar('categories');
        return $this->handleView($view);
    }
    /**
     * @param Category $category
     * @return array
     * @View()
     * @ParamConverter("category", class="AppBundle:Category")
     */
    public function getCategoryAction(Category $category){
        $view=$this->view($category,200,array('Access-Control-Allow-Origin'=>'*'))
                   ->setTemplate("MobileBundle:Categories:category.html.twig")
                   ->setTemplateVar('category');
        return $this->handleView($view);
    }
}
