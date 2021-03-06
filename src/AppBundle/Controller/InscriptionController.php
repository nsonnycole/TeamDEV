<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Inscription;
use AppBundle\Entity\Notification;
use AppBundle\Form\Type\InscriptionType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

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
         if($projet->getNbPlaces() >= $projet->getNbParticipants()){
           if($dejaInscrit ){
             $session->getFlashBag()->add('warning', 'Vous êtes déja insscrit à ce projet!');
             return $this->redirect('/projets');
           }else{
             $inscription->setIdUtilisateur($usr);
           }
        } else {
          $session->getFlashBag()->add('danger', 'Désolé plus de places pour ce projet!');
          return $this->redirect('/projets');
        }

         $inscription->setIdProjet($projet);
         $inscription->setStatut("En attente");
         $em->persist($inscription);
         $em->flush();

         // Création d'une notification
         $notification = new Notification();
         $notification->setMessage("souhaite participer à votre projet");
         $notification->setExpediteur($usr);
         $notification->setDestinataire($projet->getIdUtilisateur());
         $em->persist($notification);
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
      $projet = $em->getRepository('AppBundle:Projet')->getById($id);
      $dejaInscrit = $em->getRepository('AppBundle:Inscription')->getSiUserInscrit($usr);

      if($dejaInscrit){
        $em->remove($dejaInscrit);
        $em->flush();

        $session->getFlashBag()->add('success', 'Vous ne faites plus partie de ce projet');
        return $this->redirect('/projets');

        // Création d'une notification
        $notification = new Notification();
        $notification->setMessage("ne fait plus partie de votre projet");
        $notification->setExpediteur($usr);
        $notification->setDestinataire($inscription->getIdProjet()->getIdUtilisateur());
        $em->persist($notification);
        $em->flush();

      }else{
        $session->getFlashBag()->add('warning', 'Vous êtes pas inscrit à ce projet!');
        return $this->redirect('/mesParticipations');
      }

    }

      /**
       * @Route("/accepter/{id}", name="accepter")
       */
      public function accepterAction(Request $request, $id)
      {
        $session = new Session();
        $em = $this->getDoctrine()->getManager();
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $inscription= $em->getRepository('AppBundle:Inscription')->getById($id);
        $projet = $inscription->getIdProjet();

          $inscription->setStatut("Accepter");
          $em->persist($inscription);
          $projet->setNbParticipants($projet->getNbParticipants()+1);
          $em->flush();

          // Création d'une notification
          $notification = new Notification();
          $notification->setMessage("a accepté(e) votre demande");
          $notification->setExpediteur($usr);
          $notification->setDestinataire($inscription->getIdUtilisateur());
          $em->persist($notification);
          $em->flush();


          $session->getFlashBag()->add('success', 'Inscription accepté');
          return $this->redirect('/mesProjets');


      }

      /**
       * @Route("/refuser/{id}", name="refuser")
       */
      public function refuserAction(Request $request, $id)
      {
        $session = new Session();
        $em = $this->getDoctrine()->getManager();
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $inscription= $em->getRepository('AppBundle:Inscription')->getById($id);
        $projet = $inscription->getIdProjet();


          $inscription->setStatut("Refuser");
          $em->remove($inscription);
          $projet->setNbParticipants($projet->getNbParticipants()-1);
          $em->flush();

          // Création d'une notification
          $notification = new Notification();
          $notification->setMessage("a refusé(e) votre demande");
          $notification->setExpediteur($usr);
          $notification->setDestinataire($inscription->getIdUtilisateur());
          $em->persist($notification);
          $em->flush();

          $session->getFlashBag()->add('success', 'Inscription refusé');
          return $this->redirect('/mesProjets');

      }







}
