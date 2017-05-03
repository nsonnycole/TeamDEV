<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Inscription;
use AppBundle\Form\Type\InscriptionType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;

class InscriptionController extends Controller
{


   /**
    * @Route("newInsc/{id}", name="newInsc")
    */
   public function newInscAction(Request $request,$id)
   {

       //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
       $session = new Session();
       $em = $this->getDoctrine()->getManager();
       $inscription = new Inscription();
       $projet = $em->getRepository('AppBundle:Projet')->getById($id);

       $form = $this->createForm(InscriptionType::class, $inscription);
       $form->handleRequest($request);
       $usr = $this->get('security.token_storage')->getToken()->getUser();
       if($form->isSubmitted()){
         $inscription->setIdUtilisateur($usr);
         $inscription->setStatut("En attente");
         $inscription->setIdProjet($projet);
         $em->persist($inscription);
         $em->flush();

         $session->getFlashBag()->add('success', 'Votre demande à bien été pris en compte !');
         return $this->redirect($_SERVER['HTTP_REFERER']);
       }

       // replace this example code with whatever you need
       return $this->render('Inscription/newInsc.html.twig', array(
                         'form' => $form->createView(),
                         'projet' => $projet

       ));

  }


}
