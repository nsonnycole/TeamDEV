<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Projet;
use AppBundle\Form\Type\ProjetType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;

class UtilisateurController extends Controller
{
  /**
   * @Route("/mesProjets", name="mesProjets")
   */
  public function mesProjetAction(Request $request)
  {

    $em = $this->getDoctrine()->getManager();
    $usr = $this->get('security.token_storage')->getToken()->getUser();
    $usr->getId();
    $projets = $em->getRepository('AppBundle:Projet')->getProjetByuser($usr);
  //  $participe = $em->getRepository('AppBundle:Inscription')->getUserInscritprojet($usr, $projets);
     // replace this example code with whatever you need
     return $this->render('utilisateur/mesProjets.html.twig', array(
       'projets' => $projets,
    //   'participe' => $participe
     ));
  }

  /**
   * @Route("/mesParticipations", name="mesParticipations")
   */
  public function mesParticipationsAction(Request $request)
  {

    $em = $this->getDoctrine()->getManager();
    $usr = $this->get('security.token_storage')->getToken()->getUser();
    $usr->getId();
    $participation = $em->getRepository('AppBundle:Inscription')->getUserInscrit($usr);
    $participe = $usr;
  //  $participe = $em->getRepository('AppBundle:Inscription')->getUserInscritprojet($usr, $projets);
     // replace this example code with whatever you need
     return $this->render('utilisateur/mesParticipations.html.twig', array(
       'participation' => $participation,
       'participe' => $participe
     ));
  }

  /**
   * @Route("/mesCompetences", name="mesCompetences")
   */
  public function mesCompetencesAction(Request $request)
  {

    $em = $this->getDoctrine()->getManager();
    $usr = $this->get('security.token_storage')->getToken()->getUser();
    $usr->getId();
    $competences = $em->getRepository('AppBundle:Competence')->getCompetenceUser($usr);
  //  $participe = $em->getRepository('AppBundle:Inscription')->getUserInscritprojet($usr, $projets);
     // replace this example code with whatever you need
     return $this->render('utilisateur/mesCompetences.html.twig', array(
       'competences' => $competences,
    //   'participe' => $participe
     ));
  }

  /**
   * @Route("/profilDe/{username}", name="profilDe")
   */
  public function profilDeAction(Request $request, $username)
  {

    $em = $this->getDoctrine()->getManager();
    $usr = $em->getRepository('AppBundle:User')->getByUsername($username);
    $userID = $em->getRepository('AppBundle:User')->getById($usr->getId());
    $competences = $em->getRepository('AppBundle:Competence')->getCompetenceUser($userID);
     // replace this example code with whatever you need
     return $this->render('utilisateur/profilDe.html.twig', array(
       'user' => $usr,
       'competences' => $competences
     ));
  }
}
