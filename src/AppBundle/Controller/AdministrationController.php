<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;

class AdministrationController extends Controller
{
    /**
     * @Route("/indexAdmin", name="indexAdmin")
     */
    public function indexAdminAction(Request $request)
    {
        $this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Cet accès est bloqué!');
        // replace this example code with whatever you need
        return $this->render('administration/indexAdmin.html.twig');
    }

}
