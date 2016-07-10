<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Resolution;
use AppBundle\Form\ResolutionType;

/**
 * Resolution controller.
 *
 * @Route("/resolution")
 */
class ResolutionController extends Controller
{
    /**
     * Lists all Resolution entities.
     *
     * @Route("/", name="resolution_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $resolutions = $em->getRepository('AppBundle:Resolution')->findAll();

        return $this->render('resolution/index.html.twig', array(
            'resolutions' => $resolutions,
        ));
    }

    /**
     * Creates a new Resolution entity.
     *
     * @Route("/new", name="resolution_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $resolution = new Resolution();
        $form = $this->createForm('AppBundle\Form\ResolutionType', $resolution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resolution);
            $em->flush();

            return $this->redirectToRoute('resolution_show', array('id' => $resolution->getId()));
        }

        return $this->render('resolution/new.html.twig', array(
            'resolution' => $resolution,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Resolution entity.
     *
     * @Route("/{id}", name="resolution_show")
     * @Method("GET")
     */
    public function showAction(Resolution $resolution)
    {
        $deleteForm = $this->createDeleteForm($resolution);

        return $this->render('resolution/show.html.twig', array(
            'resolution' => $resolution,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Resolution entity.
     *
     * @Route("/{id}/edit", name="resolution_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Resolution $resolution)
    {
        $deleteForm = $this->createDeleteForm($resolution);
        $editForm = $this->createForm('AppBundle\Form\ResolutionType', $resolution);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($resolution);
            $em->flush();

            return $this->redirectToRoute('resolution_edit', array('id' => $resolution->getId()));
        }

        return $this->render('resolution/edit.html.twig', array(
            'resolution' => $resolution,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Resolution entity.
     *
     * @Route("/{id}", name="resolution_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Resolution $resolution)
    {
        $form = $this->createDeleteForm($resolution);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($resolution);
            $em->flush();
        }

        return $this->redirectToRoute('resolution_index');
    }

    /**
     * Creates a form to delete a Resolution entity.
     *
     * @param Resolution $resolution The Resolution entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Resolution $resolution)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('resolution_delete', array('id' => $resolution->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
