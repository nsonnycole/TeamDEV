<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Projet;
use AppBundle\Form\Type\ProjetType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;

class ProjetController extends Controller
{
    /**
     * @Route("/projets", name="projets")
     */
    public function projetsAction(Request $request)
    {
        $em = $this->getDoctrine()->getManager();
        $projets = $em->getRepository('AppBundle:Projet')->getAll();
        return $this->render('projets/projets.html.twig',array(
          'projets' => $projets,
        )
      );

   }

   /**
    * @Route("/projets/showProjet/{id}", name="showProjet")
    */
   public function showProjetAction(Request $request, $id)
   {
      $em = $this->getDoctrine()->getManager();
      $projet = $em->getRepository('AppBundle:Projet')->getById($id);
      $participants = $em->getRepository('AppBundle:Inscription')->getparticipantProjet($id);
    
       // replace this example code with whatever you need
       return $this->render('projets/afficheProjet.html.twig', array(
         'detailProjet' => $projet,
         'participants' => $participants
       ));

  }

  /**
   * @Route("/projets/newProjet", name="newProjet")
   */
  public function newProjetAction(Request $request)
  {

      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $projet = new Projet();

      $form = $this->createForm(ProjetType::class, $projet);
      $form->handleRequest($request);
      $usr = $this->get('security.token_storage')->getToken()->getUser();
      if($form->isSubmitted()){
        $projet->setIdUtilisateur($usr);
        $projet->setStatut("Ouvert");
        $projet->setNbPlaces(0);
        $em->persist($projet);
        $em->flush();

        $session->getFlashBag()->add('success', 'l\'article à bien été ajoutée !');
        return $this->redirect($_SERVER['HTTP_REFERER']);
      }

      // replace this example code with whatever you need
      return $this->render('projets/newProjet.html.twig', array(
                        'form' => $form->createView()
      ));

 }

 /**
  * @Route("/projets/editProjet{id}", name="editProjet")
  */
 public function editProjetAction(Request $request, $id)
 {

     //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
     $session = new Session();
     $em = $this->getDoctrine()->getManager();
     $projet = $em->getRepository('AppBundle:Projet')->getById($id);
     $form = $this->createForm(ProjetType::class, $projet);
     $form->handleRequest($request);
     if($form->isSubmitted()){

       $em->persist($projet);
       $em->flush();

       $session->getFlashBag()->add('success', 'le projet à bien été modifié !');
       return $this->redirect($_SERVER['HTTP_REFERER']);
     }

     // replace this example code with whatever you need
     return $this->render('projets/editProjet.html.twig', array(
                       'form' => $form->createView(),
                       'projet' => $projet
     ));

}

/**
 * @Route("/projets/deleteProjet/{id}", name="deleteProjet")
 */
public function deleteProjetAction(Request $request, $id)
{

    //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
    $session = new Session();
    $em = $this->getDoctrine()->getManager();

      $em->remove($projet);
      $em->flush();

      $session->getFlashBag()->add('success', 'le projet à bien été supprimé !');
      return $this->redirect($_SERVER['HTTP_REFERER']);


}




}
