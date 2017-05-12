<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Message;
use AppBundle\Form\Type\MessageType;
use Symfony\Component\HttpFoundation\Session\Session;
use Symfony\Component\Security\Core\User\UserInterface;

class MessageController extends Controller
{



   /**
    * @Route("newMessage/{IdDestinataire}", name="newMessage")
    */
   public function newMessageAction(Request $request, $IdDestinataire)
   {

       //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
       $session = new Session();
       $em = $this->getDoctrine()->getManager();
       $message = new Message();
       $usr = $this->get('security.token_storage')->getToken()->getUser();
       $destinataire = $em->getRepository('AppBundle:User')->getById($IdDestinataire);

       $form = $this->createForm(MessageType::class, $message);
       $form->handleRequest($request);


       if($form->isSubmitted()){
         $message->setExpediteur($usr);
         $message->setDestinataire($destinataire);
         $message->setStatut("Non lu");
         $em->persist($message);
         $em->flush();

         $session->getFlashBag()->add('success', 'Votre message à été envoyée !');
         return $this->redirect('/mesMessages');
       }

       // replace this example code with whatever you need
       return $this->render('messages/newMessage.html.twig', array(
                         'form' => $form->createView(),


       ));
  }

  /**
   * @Route("/messages/showMessage/{id}", name="showMessage")
   */
  public function showMessageAction(Request $request, $id)
  {
      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $message = $em->getRepository('AppBundle:Message')->getById($id);
      $message->setStatut(" Lu ");

      $form = $this->createForm(MessageType::class, $message);
      $form->handleRequest($request);

      if($form->isSubmitted()){
        $message->setExpediteur($usr);
        $message->setDestinataire($destinataire);
        $message->setDate(new \Date());
        $message->setStatut("Lu et répondu");
        $em->persist($message);
        $em->flush();

        $session->getFlashBag()->add('success', 'Votre réponse à été envoyée !');
        return $this->redirect('/mesMessages');
      }
        return $this->redirect('messages/showMessage.html.twig',array(
          'form' => $form->createView(),
          'message' => $message,
        ));


  }


  /**
   * @Route("/messages/deleteMessage/{id}", name="deleteMessage")
   */
  public function deleteMessageAction(Request $request, $id)
  {
      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $message = $em->getRepository('AppBundle:Message')->getById($id);
        $em->remove($message);
        $em->flush();

        $session->getFlashBag()->add('success', 'Le message à bien été supprimé !');
        return $this->redirect('/mesMessages');


  }



}
