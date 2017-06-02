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

      $securityContext = $this->container->get('security.authorization_checker');
      if ($securityContext->isGranted('IS_AUTHENTICATED_REMEMBERED')) {
        $usr = $this->get('security.token_storage')->getToken()->getUser();
        $notifications = $em->getRepository('AppBundle:Notification')->getNotificationUser($usr->getId());
          return $this->render('default/index.html.twig', array(
            'projets' =>   $projets,
            'notifications' => $notifications,
          )
        );
      }else{
        $notifications = $em->getRepository('AppBundle:Notification')->getNotificationUser(0);
        return $this->render('default/index.html.twig', array(
          'projets' =>   $projets,
          'notifications' => $notifications,
        )
      );
    }
  }

    /**
     * @Route("/logout", name="logout")
     */
    public function logoutAction(Request $request)
    {

    }

}
