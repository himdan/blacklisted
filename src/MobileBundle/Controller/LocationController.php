<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

namespace MobileBundle\Controller;
use FOS\RestBundle\Controller\FOSRestController;
use AppBundle\Entity\Claim;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\View;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Account;
use AppBundle\Entity\ServiceLocation;

/**
 * Description of LocationController
 *
 * @author acer1
 */
class LocationController extends FosRestController {
    //put your code here
    /**
     * @param Claim $claim
     * @param Request $request
     * @return Response
     */
    public function postLocationAction(Claim $claim,Request $request){
        $location=new ServiceLocation();
        $location->setAddress($request->get('address'));
        $location->setDescription($request->get('description'));
        $location->setLatitude($request->get('latitude'));
        $location->setLongtitude($request->get('longitude'));
        $account=$this->getDoctrine()->getRepository('AppBundle:Account')->findOneBy(array('apikey'=>$request->get('apikey')));
        $status=200;
        $message="";
        if($claim->getAccount()->getId()==$account->getId()){
            $location->setClaim($claim);
         
            $em=$this->getDoctrine()->getManager();
            $em->persist($location);
            $em->flush();
            $claim->setLocation($location);

            $message="location created";
            $status=201;
        }else{
            $message="unauthorized";
            $status=401;
        }
        $view=$this->view($message,$status,array('Access-Control-Allow-Origin'=>'*'))
            ->setTemplate('MobileBundle:ServiceLocation:create.html.twig')
            ->setTemplateVar('message');
        return $this->handleView($view);
    }
   
}
