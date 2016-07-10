<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\ServiceLocation;
use AppBundle\Form\ServiceLocationType;

/**
 * ServiceLocation controller.
 *
 * @Route("/servicelocation")
 */
class ServiceLocationController extends Controller
{
    /**
     * Lists all ServiceLocation entities.
     *
     * @Route("/", name="servicelocation_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $serviceLocations = $em->getRepository('AppBundle:ServiceLocation')->findAll();

        return $this->render('servicelocation/index.html.twig', array(
            'serviceLocations' => $serviceLocations,
        ));
    }

    /**
     * Creates a new ServiceLocation entity.
     *
     * @Route("/new", name="servicelocation_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $serviceLocation = new ServiceLocation();
        $form = $this->createForm('AppBundle\Form\ServiceLocationType', $serviceLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serviceLocation);
            $em->flush();

            return $this->redirectToRoute('servicelocation_show', array('id' => $serviceLocation->getId()));
        }

        return $this->render('servicelocation/new.html.twig', array(
            'serviceLocation' => $serviceLocation,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a ServiceLocation entity.
     *
     * @Route("/{id}", name="servicelocation_show")
     * @Method("GET")
     */
    public function showAction(ServiceLocation $serviceLocation)
    {
        $deleteForm = $this->createDeleteForm($serviceLocation);

        return $this->render('servicelocation/show.html.twig', array(
            'serviceLocation' => $serviceLocation,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing ServiceLocation entity.
     *
     * @Route("/{id}/edit", name="servicelocation_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, ServiceLocation $serviceLocation)
    {
        $deleteForm = $this->createDeleteForm($serviceLocation);
        $editForm = $this->createForm('AppBundle\Form\ServiceLocationType', $serviceLocation);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($serviceLocation);
            $em->flush();

            return $this->redirectToRoute('servicelocation_edit', array('id' => $serviceLocation->getId()));
        }

        return $this->render('servicelocation/edit.html.twig', array(
            'serviceLocation' => $serviceLocation,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a ServiceLocation entity.
     *
     * @Route("/{id}", name="servicelocation_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, ServiceLocation $serviceLocation)
    {
        $form = $this->createDeleteForm($serviceLocation);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($serviceLocation);
            $em->flush();
        }

        return $this->redirectToRoute('servicelocation_index');
    }

    /**
     * Creates a form to delete a ServiceLocation entity.
     *
     * @param ServiceLocation $serviceLocation The ServiceLocation entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(ServiceLocation $serviceLocation)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('servicelocation_delete', array('id' => $serviceLocation->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
