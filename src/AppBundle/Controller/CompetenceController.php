<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Competence;
use AppBundle\Form\Type\CompetenceType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;

class CompetenceController extends Controller
{




   /**
    * @Route("newCompetence", name="newCompetence")
    */
   public function newCompetenceAction(Request $request)
   {

       //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
       $session = new Session();
       $em = $this->getDoctrine()->getManager();
       $competence = new Competence();
       $usr = $this->get('security.token_storage')->getToken()->getUser();

       $form = $this->createForm(CompetenceType::class, $competence);
       $form->handleRequest($request);


       if($form->isSubmitted()){
         $competence->setIdUtilisateur($usr);
         $em->persist($competence);
         $em->flush();

         $session->getFlashBag()->add('success', 'Votre compétence à bien été rajoutée !');
         return $this->redirect('/mesCompetences');
       }

       // replace this example code with whatever you need
       return $this->render('competence/newCompetence.html.twig', array(
                         'form' => $form->createView(),


       ));

  }

  /**
   * @Route("/projets/editCompetence/{id}", name="editCompetence")
   */
  public function editCompetenceAction(Request $request, $id)
  {

      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $competence = $em->getRepository('AppBundle:Competence')->getById($id);
      $form = $this->createForm(CompetenceType::class, $competence);
      $form->handleRequest($request);
      if($form->isSubmitted()){

        $em->persist($competence);
        $em->flush();

        $session->getFlashBag()->add('success', 'la compétence à bien été modifié !');
        return $this->redirect('/mesCompetences');
      }

      // replace this example code with whatever you need
      return $this->render('competence/editCompetence.html.twig', array(
                        'form' => $form->createView(),
                        'competences' => $competence
      ));

 }


  /**
   * @Route("/projets/deleteCompetence/{id}", name="deleteCompetence")
   */
  public function deleteCompetenceAction(Request $request, $id)
  {

      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $competence = $em->getRepository('AppBundle:Competence')->getById($id);
        $em->remove($competence);
        $em->flush();

        $session->getFlashBag()->add('success', 'la compétence à bien été supprimé !');
        return $this->redirect('/mesCompetences');


  }



}
