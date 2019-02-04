<?php

namespace AppBundle\Controller;

use AppBundle\Entity\ServiceLocation;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Claim;
use AppBundle\Entity\Media;
use AppBundle\Form\ClaimType;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;
use Symfony\Component\HttpFoundation\Response;

/**
 * Claim controller.
 *
 * @Route("/claim")
 * @Security("has_role('ROLE_USER')")
 */
class ClaimController extends Controller
{
    /**
     * Lists all Claim entities.
     *
     * @Route("/", name="claim_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $claims = $em->getRepository('AppBundle:Claim')->findBy(array('account'=>$this->getUser()->getId()));
        if(count($claims)){
        return $this->render('claim/index.html.twig', array(
            'claims' => $claims,
        ));
        }else{
          return $this->redirectToRoute('claim_new')  ;
        }
    }

    /**
     * Creates a new Claim entity.
     * @param Request $request
     * @Route("/new", name="claim_new")
     * @Method({"GET", "POST"})
     * @return Type
     */
    public function newAction(Request $request)
    {
        $claim = new Claim();
        $form = $this->createForm('AppBundle\Form\ClaimType', $claim);
        $form->handleRequest($request);
        $user=$this->getUser();
        if ($form->isSubmitted() && $form->isValid()) {
            $claim->setAccount($user);
            $claim->setIsService();
            $em = $this->getDoctrine()->getManager();
            $em->persist($claim);
            $em->flush();

            return $this->redirectToRoute('claim_show', array('id' => $claim->getId()));
        }

        return $this->render('claim/new.html.twig', array(
            'claim' => $claim,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Claim entity.
     *
     * @Route("/{id}", name="claim_show")
     * @Method("GET")
     */
    public function showAction(Claim $claim)
    {
        $user=$this->getUser();
        if($user->getId()==$claim->getAccount()->getId()) {
            $deleteForm = $this->createDeleteForm($claim);

            return $this->render('claim/show.html.twig', array(
                'claim' => $claim,
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            return $this->redirectToRoute('claim_index');
        }
    }

    /**
     * Displays a form to edit an existing Claim entity.
     *
     * @Route("/{id}/edit", name="claim_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Claim $claim)
    {
        $deleteForm = $this->createDeleteForm($claim);
        $user=$this->getUser();
        if($user->getId()==$claim->getAccount()->getId()) {
            $editForm = $this->createForm('AppBundle\Form\ClaimType', $claim);
            $editForm->handleRequest($request);

            if ($editForm->isSubmitted() && $editForm->isValid()) {
                $claim->setIsService();
                $em = $this->getDoctrine()->getManager();
                $em->persist($claim);
                $em->flush();

                return $this->redirectToRoute('claim_edit', array('id' => $claim->getId()));
            }

            return $this->render('claim/edit.html.twig', array(
                'claim' => $claim,
                'form' => $editForm->createView(),
                'delete_form' => $deleteForm->createView(),
            ));
        }else{
            return $this->redirectToRoute('claim_index');
        }}

    /**
     * Deletes a Claim entity.
     *
     * @Route("/{id}", name="claim_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Claim $claim)
    {
        $user=$this->getUser();
        if($user->getId()==$claim->getAccount()->getId()) {
            $form = $this->createDeleteForm($claim);
            $form->handleRequest($request);

            if ($form->isSubmitted() && $form->isValid()) {
                $em = $this->getDoctrine()->getManager();
                $em->remove($claim);
                $em->flush();
            }
        }

        return $this->redirectToRoute('claim_index');
    }

    /**
     * Creates a form to delete a Claim entity.
     *
     * @param Claim $claim The Claim entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Claim $claim)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('claim_delete', array('id' => $claim->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
    /**
     * Displays a form to add a medium entity
     *
     * @Route("/{id}/addmedium", name="add_medium")
     * @Method({"GET", "POST"})
     */
    public function addMediumAction(Claim $claim,Request $request){
        $user=$this->getUser();
        if($user->getId()==$claim->getAccount()->getId()) {
            $medium = new Media();
            $mediumForm = $this->createForm('AppBundle\Form\MediaType', $medium);
            $mediumForm->handleRequest($request);
            if ($mediumForm->isSubmitted() && $mediumForm->isValid()) {
                $medium->setClaim($claim);
                $medium->upload();
                $em = $this->getDoctrine()->getManager();
                $em->persist($medium);
                $em->flush();
                $claim->addMedia($medium);
                return $this->redirectToRoute('claim_show', array('id' => $claim->getId()));
            }else{
            return $this->render('claim/addmedia.html.twig', array(
                'claim' => $claim,
                'form' => $mediumForm->createView(),
            ));
            }
        }else{
            return $this->redirectToRoute('claim_index');
        }
    }
    /**
     * Displays a form to add a medium entity
     * @param Claim $claim
     * @param Request $request
     * @Route("/{id}/setlocation", name="set_location")
     * @Method({"GET", "POST"})
     * @return Response
     */
    public  function addLocation(Claim $claim ,Request $request){
        $user=$this->getUser();
        if($claim->isOwnedBy($user)){
            $location=new ServiceLocation();
            $locationForm=$this->createForm('AppBundle\Form\ServiceLocationType',$location);
            $locationForm->handleRequest($request);
            if($locationForm->isSubmitted()&&$locationForm->isValid()){
                $location->setClaim($claim);
                $em=$this->getDoctrine()->getManager();
                $em->persist($location);
                $em->flush();
                $claim->setLocation($location);
                return $this->redirectToRoute('claim_show', array('id' => $claim->getId()));
            }else{

                return $this->render('claim/setlocation.html.twig', array(
                    'claim' => $claim,
                    'form' => $locationForm->createView(),
                ));
            }
        }else{
            return $this->redirectToRoute('claim_index');
        }

    }
}
