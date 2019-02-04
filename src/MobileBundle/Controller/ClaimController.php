<?php

namespace MobileBundle\Controller;

use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Category;
use AppBundle\Entity\Claim;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Account;

class ClaimController extends FosRestController
{
    public function getClaimsAction()
    {
        $claims=$this->getDoctrine()->getRepository('AppBundle:Claim')->findAll();
        $view=$this->view($claims, 200)
                   ->setTemplate('MobileBundle:Claims:claims.html.twig')
                   ->setTemplateVar('claims') ;
        return $this->handleView($view);
    }
    public function postClaimsAction(Request $request)
    {
        $user=$this->getDoctrine()->getRepository('AppBundle:Account')->findBy(array('apikey'=>$request->get('apikey')));
        $claims=$this->getDoctrine()->getRepository('AppBundle:Claim')->findBy(array('account'=>$user));
        $view=$this->view($claims, 200, array('Access-Control-Allow-Origin'=>'*'))
                   ->setTemplate('MobileBundle:Claims:claims.html.twig')
                   ->setTemplateVar('claims') ;
        return $this->handleView($view);
    }
    /**
     * @param Claim $claim
     * @return type
     * @View()
     * @ParamConverter("claim", class="AppBundle:Claim")
     */
    public function getClaimAction(Claim $claim)
    {
        $view=$this->view($claim, 200, array('Access-Control-Allow-Origin'=>'*'))
                   ->setTemplate('MobileBundle:Claims:claim.html.twig')
                   ->setTemplateVar('claim');
        return $this->handleView($view);
    }
    /**
     * @param Category $category
     * @return type
     * @View()
     * @ParamConverter("category", class="AppBundle:Category")
     */
    public function getClaimByCategoryAction(Category $category)
    {
        $claims=$this->getDoctrine()->getRepository('AppBundle:Claim')->findBy(array('category'=>$category));
        $view=$this->view($claims, 200)
            ->setTemplate('MobileBundle:Claims:claimsByCategory.html.twig')
            ->setTemplateVar('claims');
        return $this->handleView($view);
    }

    /**
     * @param Request $request
     * @return Response
     */
    public function postNewClaimAction(Request $request)
    {
        $account=$this->getDoctrine()->getRepository('AppBundle:Account')->findOneBy(array('apikey'=>$request->get('apikey')));
        
        $claim=new Claim();
        $category=$this->getDoctrine()->getRepository('AppBundle:Category')->findOneBy(array('id'=>$request->get('category')));

        if ($account instanceof Account) {
            $claim->setAccount($account) ;
            if ($category instanceof Category) {
                $claim->setCategory($category);
                $claim->setTitle($request->get('title'));
                $claim->setDescription($request->get('description'));
                $claim->setIsService();
                $em=$this->getDoctrine()->getManager();
                $em->persist($claim);
                $em->flush();
                $message=$claim;
                $status=201;
            } else {
                $message='category not found' ;
                $status=404;
            }
        } else {
            $message='unauthorized You must login' ;
            $status=401;
        }
        $view=$this->view($message, $status, array('Access-Control-Allow-Origin'=>'*'))
            ->setTemplate('MobileBundle:Claims:create.html.twig')
            ->setTemplateVar('message');
         return $this->handleView($view);
    }
    /**
     * @param Request $request
     * @return Response
     */
    public function postUpdateClaimAction(Request $request)
    {
        $account=$this->getDoctrine()->getRepository('AppBundle:Account')->findoneBy(array('apikey'=>$request->get('apikey')));
        
        $claim=$this->getDoctrine()->getRepository('AppBundle:Claim')->findOneBy(array('id'=>$request->get('id')));
        $category=$this->getDoctrine()->getRepository('AppBundle:Category')->findOneBy(array('id'=>$request->get('category')));

        if ($account instanceof Account) {
            $claim->setAccount($account) ;
            if ($category instanceof Category) {
                $claim->setCategory($category);
                $claim->setTitle($request->get('title'));
                $claim->setDescription($request->get('description'));
                $em=$this->getDoctrine()->getManager();
                $em->persist($claim);
                $em->flush();
                $message=" new claim created";
                $status=201;
            } else {
                $message='category not found' ;
                $status=404;
            }
        } else {
            $message='unauthorized You must login' ;
            $status=401;
        }
        $view=$this->view($message, $status, array('Access-Control-Allow-Origin'=>'*'))
            ->setTemplate('MobileBundle:Claims:create.html.twig')
            ->setTemplateVar('message');
         return $this->handleView($view);
    }
}
