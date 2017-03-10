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
     * @Route("/login", name="login")
     */
    public function loginAction(Request $request)
    {
        // replace this example code with whatever you need
        return $this->render('default/login.html.twig');
    }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {

    }
}
