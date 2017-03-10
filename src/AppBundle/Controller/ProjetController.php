<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

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
    * @Route("/showProjet", name="showProjet")
    */
   public function showProjetAction(Request $request)
   {
       // replace this example code with whatever you need
       return $this->render('projets/afficheProjet.html.twig');

  }

  



}
