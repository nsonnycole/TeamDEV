<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Reseaux;
use AppBundle\Form\Type\ReseauxType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;

class ReseauxController extends Controller
{
  /**
   * @Route("newReseaux", name="newReseaux")
   */
  public function newReseauxAction(Request $request)
  {

      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $reseaux = new Reseaux();
      $usr = $this->get('security.token_storage')->getToken()->getUser();

      $form = $this->createForm(ReseauxType::class, $reseaux);
      $form->handleRequest($request);


      if($form->isSubmitted()){
        $reseaux->setIdUtilisateur($usr);
        $em->persist($reseaux);
        $em->flush();

        $session->getFlashBag()->add('success', 'Votre réseau à bien été rajoutée !');
        return $this->redirect('/mesReseaux');
      }

      // replace this example code with whatever you need
      return $this->render('reseaux/newReseaux.html.twig', array(
                        'form' => $form->createView(),


      ));

 }

  /**
   * @Route("editReseaux/{id}", name="editReseaux")
   */
  public function editReseauxAction(Request $request, $id)
  {

      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $reseaux = $em->getRepository('AppBundle:Reseaux')->getById($id);
      $form = $this->createForm(ReseauxType::class, $reseaux);
      $form->handleRequest($request);
      if($form->isSubmitted()){

        $em->persist($reseaux);
        $em->flush();

        $session->getFlashBag()->add('success', 'la compétence à bien été modifié !');
        return $this->redirect('/mesReseaux');
      }

      // replace this example code with whatever you need
      return $this->render('reseaux/editReseaux.html.twig', array(
                        'form' => $form->createView(),
                        'reseaux' => $reseaux
      ));

 }


}
