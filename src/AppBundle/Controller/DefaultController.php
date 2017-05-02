<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class DefaultController extends Controller
{
    /**
     * @Route("/", name="homepage")
     */
    public function indexAction(Request $request)
    {

      $em = $this->getDoctrine()->getManager();
      $projets = $em->getRepository('AppBundle:Projet')->getAll();
        return $this->render('default/index.html.twig', array(
          'projets' =>   $projets,
        )
      );
    }

    /**
     * @Route("/profile", name="profile")
     */
    public function profileAction(Request $request)
    {

    }


    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {

    }

}
