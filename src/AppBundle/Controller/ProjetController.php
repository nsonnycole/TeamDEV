<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Projet;
use AppBundle\Entity\Notification;
use AppBundle\Form\Type\ProjetType;
use AppBundle\Form\Type\RechercheProjetType;
use AppBundle\Form\Type\ProjetImageType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;
use Symfony\Component\HttpFoundation\JsonResponse;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Security;

class ProjetController extends Controller
{
  /**
  * @Route("/projets", name="projets")
  */
  public function projetsAction(Request $request)
  {
    $em = $this->getDoctrine()->getManager();
    $projets = $em->getRepository('AppBundle:Projet')->getAll();

    $form = $this->createForm(RechercheProjetType::class);
    $form->handleRequest($request);
    if($form->isSubmitted()){

      $recherche = $form["texte"]->getData();
      //$projets = $em->getRepository('AppBundle:Projet')->recherche($recherche);
      $projets = $em->getRepository('AppBundle:Projet')->getAll();
      return $this->render('projets/projets.html.twig',array(
      'projets' => $projets,
      'recherche'=> $recherche,
      'form' => $form->createView(),
    ));
    }

    return $this->render('projets/projets.html.twig',array(
      'projets' => $projets,
      'form' => $form->createView(),
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
  $usr = $this->get('security.token_storage')->getToken()->getUser();
  $participants = $em->getRepository('AppBundle:Inscription')->getparticipantProjet($projet);


  // replace this example code with whatever you need
  return $this->render('projets/afficheProjet.html.twig', array(
    'detailProjet' => $projet,
    'participants' => $participants,

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
    // $projet->setImageFile($projet->getImage());
    // $helper = $this->container->get('vich_uploader.templating.helper.uploader_helper');
    // $path = $helper->asset($projet, 'image');
    $em->persist($projet);
    $em->flush();

    $session->getFlashBag()->add('success', 'le projet à bien été ajoutée !');
    return $this->redirect('/projets');
  }

  // replace this example code with whatever you need
  return $this->render('projets/newProjet.html.twig', array(
    'form' => $form->createView()
  ));

}

/**
* @Route("/projets/newProjetImage/{idProjet}", name="newProjetImage")
*/
public function newProjetImageAction (Request $request,$idProjet){

  //  if (!$request->isXmlHttpRequest()) {
  //       return new JsonResponse(array('message' => 'Vous ne pouvez pas accedez à ce formulaire!'), 400);
  //   }

  $session = new Session();
  $em = $this->getDoctrine()->getManager();
  $projet = $em->getRepository('AppBundle:Projet')->getById($idProjet);
  $form = $this->createForm(ProjetImageType::class, $projet);

  if ($request->getMethod() === 'POST') {
    $form->handleRequest($request);
    if ($form->isSubmitted()) {
      $em = $this->getDoctrine()->getEntityManager();

      $projet->uploadProfilePicture();
      $em->persist($projet);
      $em->flush();

      return new JsonResponse(array('message' => 'Success!'), 200);
    }
  }

  $response = new JsonResponse(
    array(
      'message' => 'success',
      'form' => $this->renderView('projets/newProjetImage.html.twig',
      array(
        'projet' => $projet,
        'form' => $form->createView(),
      ))), 200);

      return $response;


    }


    /**
    * @Route("/projets/editProjet/{id}", name="editProjet")
    */
    public function editProjetAction(Request $request, $id)
    {

      //  $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $projet = $em->getRepository('AppBundle:Projet')->getById($id);
      $form = $this->createForm(ProjetType::class, $projet);
      $form->handleRequest($request);
      if($form->isSubmitted()){

        $em->persist($projet);
        $em->flush();

        $session->getFlashBag()->add('success', 'le projet à bien été modifié !');
        return $this->redirect('/mesProjets');
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
      $projet = $em->getRepository('AppBundle:Projet')->getById($id);
      $em->remove($projet);
      $em->flush();

      $session->getFlashBag()->add('success', 'le projet à bien été supprimé !');
      return $this->redirect('/mesProjets');


    }


    /**
    * @Route("/projets/tropheeProjet/{id}", name="tropheeProjet")
    */
    public function tropheeProjetAction(Request $request, $id)
    {
      $usr = $this->get('security.token_storage')->getToken()->getUser();
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $listParticipant = $em->getRepository('AppBundle:Inscription')->getparticipantProjet($id);



      foreach($listParticipant as $liste)
      {
        $user = $liste->getIdUtilisateur();
        $user->setTrophee($user->getTrophee()+10);
        $em->persist($liste);
        $em->flush();
        $notification = new Notification();
        $notification->setMessage("vous à attribué +10 trophée pour votre participation !");
        $notification->setExpediteur($usr);
        $notification->setDestinataire($user);
        $em->persist($notification);
        $em->flush();

      }
      // replace this example code with whatever you need
      return $this->redirect('/mesProjets');

    }

  }
