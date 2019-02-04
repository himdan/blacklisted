<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Contact;
use AppBundle\Entity\Category;
use AppBundle\Entity\Claim;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction()
    {
        $categories=$this->getDoctrine()->getRepository('AppBundle:Category')->findAll();
        $claims=$this->getDoctrine()->getRepository('AppBundle:Claim')->findRecent(3);
        return $this->render('default/index.html.twig', array(
            'categories' => $categories,'claims'=>$claims,
        ));
    }
    /**
     *
     * @param Request $request
     * @Route("/contact",name="contact")
     * @return Response
     */
    public function contactAction(Request $request)
    {
        $contact=new contact();
        $contactForm=$this->createForm('AppBundle\Form\ContactType', $contact);
      
        $contactForm->handleRequest($request);
        if ($contactForm->isSubmitted()&&$contactForm->isValid()) {
            $em=$this->getDoctrine()->getManager();
            $em->persist($contact);
            $em->flush();
            return $this->redirectToRoute('contact-success', array('id'=>$contact->getId()));
        }
        return $this->render('default/contact.html.twig', array('form'=>$contactForm->createView()));
    }
    /**
     * @param  Contact $contact
     * @Route("/contact/{id}/show",name="contact-success")
     * @return type
     */
    public function contactSuccessAction(Contact $contact)
    {
        return $this->render('default/show.contact.html.twig', array('contact'=>$contact));
    }
    /**
     * @Route("/aboutus",name="aboutus")
     */
    public function aboutUsAction()
    {
        return $this->render('default/aboutus.html.twig');
    }
    /**
     * @param Category $category
     * @Route("/categories/{id}/view",name="category_view")
     * @return  type
     */
    public function showCategoryAction(Category $category)
    {
        
        return $this->render('default/view.category.html.twig', array('category'=>$category));
    }
    /**
     * @param Claim $claim
     * @Route("/claim/{id}/view",name="claim_view")
     * @return Response
     */
    public function showClaimAction(Claim $claim)
    {
        return $this->render('default/view.claim.html.twig', array('claim'=>$claim));
    }
}
