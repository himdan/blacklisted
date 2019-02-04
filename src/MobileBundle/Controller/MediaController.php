<?php

namespace MobileBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use FOS\RestBundle\Controller\FOSRestController;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\ParamConverter;
use FOS\RestBundle\Controller\Annotations\View;
use AppBundle\Entity\Claim;
use AppBundle\Entity\Media;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;

class MediaController extends FosRestController
{


    public function getMediaAction()
    {
        $media=$this->getDoctrine()->getRepository('AppBundle:Media')->findAll();
        $view=$this->view($media, 200)
                  ->setTemplate('MobileBundle:Media:media.html.twig')
                  ->setTemplateVar('media');
        return $this->handleView($view);
    }
    /**
     * @param Media $medium
     * @return type
     * @View()
     * @ParamConverter("medium", class="AppBundle:Media")
     */

    public function getMediumAction(Media $medium)
    {
        $view=$this->view($medium, 200)
                   ->setTemplate('MobileBundle:Media:medium.html.twig')
                   ->setTemplateVar('medium');

        return $this->handleView($view);
    }
    /**
     * Finds and displays a Media entity.
     * @param Media $medium
     * @Route("/image/{id}", name="image_show")
     * @Method("GET")
     * @return Response
     */
    public function getMediumContentAction(Media $medium)
    {

        $file =    readfile($medium->getAbsolutePath());
        $headers = array(
            'Content-Type'     => $medium->getType(),
            'Content-Disposition' => 'inline; filename="'.$file.'"');
        return new Response($file, 200, $headers);
    }
    /**
     * @param Claim $claim
     * @param Request $request
     * @return Response
     */
    public function postMediumAction(Claim $claim, Request $request)
    {
        $medium= new Media();
        $medium->setAlternative($request->get('alternative'));
        $medium->setFile($request->files->get('File'));
        $account=$this->getDoctrine()->getRepository('AppBundle:Account')->findOneBy(array('apikey'=>$request->get('apikey')));
        $status=200;
        $message="";
        if ($claim->getAccount()->getId()==$account->getId()) {
            $medium->setClaim($claim);
            $medium->upload();
            $em=$this->getDoctrine()->getManager();
            $em->persist($medium);
            $em->flush();
            $claim->addMedia($medium);

            $message="media created";
            $status=201;
        } else {
            $message="unauthorized";
            $status=401;
        }
        $view=$this->view($message, $status, array('Access-Control-Allow-Origin'=>'*'))
            ->setTemplate('MobileBundle:Media:create.html.twig')
            ->setTemplateVar('message');
        return $this->handleView($view);
    }
}
