<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use KeiruaProd\ApplicationBundle\Form\Type\ProjetType;

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
       // replace this example code with whatever you need
       return $this->render('projets/afficheProjet.html.twig', array(
         'detailProjet' => $projet,
       ));

  }

  /**
   * @Route("/projets/newProjet", name="newProjet")
   */
  public function newProjetAction(Request $request)
  {
      $em = $this->getDoctrine()->getManager();
      $form = $this->createform(new ProjetType());
      // replace this example code with whatever you need
      return $this->render('projets/newProjet.html.twig', array(
                        'form' => $form->createView()
      ));

 }





}
