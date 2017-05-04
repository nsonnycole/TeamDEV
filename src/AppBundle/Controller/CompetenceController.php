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
       $usr = $this->get('security.token_storage')->getToken()->getUser();

       if($form->isSubmitted()){
         $competence->setIdUtilisateur($usr);
         $em->persist($competence);
         $em->flush();

         $session->getFlashBag()->add('success', 'Votre compétence à bien été rajoutée !');
         return $this->redirect('/profile');
       }

       // replace this example code with whatever you need
       return $this->render('competence/newCompetence.html.twig', array(
                         'form' => $form->createView(),
                         

       ));

  }


}
