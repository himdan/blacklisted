<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Method;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use AppBundle\Entity\Authority;
use AppBundle\Form\AuthorityType;

/**
 * Authority controller.
 *
 * @Route("/authority")
 */
class AuthorityController extends Controller
{
    /**
     * Lists all Authority entities.
     *
     * @Route("/", name="authority_index")
     * @Method("GET")
     */
    public function indexAction()
    {
        $em = $this->getDoctrine()->getManager();

        $authorities = $em->getRepository('AppBundle:Authority')->findAll();

        return $this->render('authority/index.html.twig', array(
            'authorities' => $authorities,
        ));
    }

    /**
     * Creates a new Authority entity.
     *
     * @Route("/new", name="authority_new")
     * @Method({"GET", "POST"})
     */
    public function newAction(Request $request)
    {
        $authority = new Authority();
        $form = $this->createForm('AppBundle\Form\AuthorityType', $authority);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($authority);
            $em->flush();

            return $this->redirectToRoute('authority_show', array('id' => $authority->getId()));
        }

        return $this->render('authority/new.html.twig', array(
            'authority' => $authority,
            'form' => $form->createView(),
        ));
    }

    /**
     * Finds and displays a Authority entity.
     *
     * @Route("/{id}", name="authority_show")
     * @Method("GET")
     */
    public function showAction(Authority $authority)
    {
        $deleteForm = $this->createDeleteForm($authority);

        return $this->render('authority/show.html.twig', array(
            'authority' => $authority,
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Displays a form to edit an existing Authority entity.
     *
     * @Route("/{id}/edit", name="authority_edit")
     * @Method({"GET", "POST"})
     */
    public function editAction(Request $request, Authority $authority)
    {
        $deleteForm = $this->createDeleteForm($authority);
        $editForm = $this->createForm('AppBundle\Form\AuthorityType', $authority);
        $editForm->handleRequest($request);

        if ($editForm->isSubmitted() && $editForm->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->persist($authority);
            $em->flush();

            return $this->redirectToRoute('authority_edit', array('id' => $authority->getId()));
        }

        return $this->render('authority/edit.html.twig', array(
            'authority' => $authority,
            'edit_form' => $editForm->createView(),
            'delete_form' => $deleteForm->createView(),
        ));
    }

    /**
     * Deletes a Authority entity.
     *
     * @Route("/{id}", name="authority_delete")
     * @Method("DELETE")
     */
    public function deleteAction(Request $request, Authority $authority)
    {
        $form = $this->createDeleteForm($authority);
        $form->handleRequest($request);

        if ($form->isSubmitted() && $form->isValid()) {
            $em = $this->getDoctrine()->getManager();
            $em->remove($authority);
            $em->flush();
        }

        return $this->redirectToRoute('authority_index');
    }

    /**
     * Creates a form to delete a Authority entity.
     *
     * @param Authority $authority The Authority entity
     *
     * @return \Symfony\Component\Form\Form The form
     */
    private function createDeleteForm(Authority $authority)
    {
        return $this->createFormBuilder()
            ->setAction($this->generateUrl('authority_delete', array('id' => $authority->getId())))
            ->setMethod('DELETE')
            ->getForm()
        ;
    }
}
