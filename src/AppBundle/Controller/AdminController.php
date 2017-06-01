<?php

namespace AppBundle\Controller;

use Symfony\Component\HttpFoundation\Request;
use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use JavierEguiluz\Bundle\EasyAdminBundle\Controller\AdminController as EasyAdminController;
use AppBundle\Entity\Event;

class AdminController extends EasyAdminController
{
    /**
     * @Route("/admin/", name="admin")
     */
    public function indexAction(Request $request)
    {
        return parent::indexAction($request);
    }

    public function createEditForm($entity, array $entityProperties)
    {
        $editForm = parent::createEditForm($entity, $entityProperties);

        if ($entity instanceof Event) {
            // the trick is to remove the default field and then
            // add the customized field
            $editForm->remove('statut');
            $editForm->add('statut', 'choice', array('choices' => array(
                'Ouvert', 'Fermer'
            )));
            $editForm->remove('dateDebut');
            $editForm->add('dateDebut', 'date', array(
              'label' => 'Début du projet',
              'format' => 'dd/MM/yyyy',
              'widget' => 'single_text',
              'attr' => array(
                  'class' => 'datepicker'

            )));
            $editForm->remove('dateFin');
            $editForm->add('dateFin', 'date', array(
              'label' => 'Fin du projet',
              'format' => 'dd/MM/yyyy',
              'widget' => 'single_text',
              'attr' => array(
                  'class' => 'datepicker'

            )));

        }

        return $editForm;
    }
}
