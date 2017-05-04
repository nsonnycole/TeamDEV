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

       $dejaInscrit = $em->getRepository('AppBundle:Inscription')->getUserInscrit($usr->getId());


       if($form->isSubmitted()){

         if($dejaInscrit){
           $session->getFlashBag()->add('warning', 'Vous êtes déja insscrit à ce projet!');
           return $this->redirect('/projets');
         }else{
           $inscription->setIdUtilisateur($usr);
         }
         $inscription->setIdProjet($projet);
         $projet->setNbParticipants($projet->getNbParticipants()+1);
         $em->persist($inscription);
         $em->flush();

         $session->getFlashBag()->add('success', 'Votre demande à bien été pris en compte !');
         return $this->redirect('/projets');
       }

       // replace this example code with whatever you need
       return $this->render('Inscription/newInsc.html.twig', array(
                         'form' => $form->createView(),
                         'projet' => $projet

       ));

  }

  /**
   * @Route("/projets/desincProjet/{id}", name="desincProjet")
   */
  public function desincProjetAction(Request $request, $id)
  {
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $usr = $this->get('security.token_storage')->getToken()->getUser();
      $inscription= $em->getRepository('AppBundle:Inscription')->getById($id);
      $dejaInscrit = $em->getRepository('AppBundle:Inscription')->getUserInscrit($usr->getId());
      $projet = $inscription->getIdProjet();
      if($dejaInscrit){
        $em->remove($inscription);
        $projet->setNbParticipants($projet->getNbParticipants()-1);
        $em->flush();

        $session->getFlashBag()->add('success', 'Vous ne faites plus partie de ce projet');
        return $this->redirect('/projets');

      }else{
        $session->getFlashBag()->add('warning', 'Vous êtes pas inscrit à ce projet!');
        return $this->redirect('/projets');
      }




  }


}
