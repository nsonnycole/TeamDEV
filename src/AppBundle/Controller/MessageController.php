<?php

namespace AppBundle\Controller;

use Sensio\Bundle\FrameworkExtraBundle\Configuration\Route;
use Symfony\Bundle\FrameworkBundle\Controller\Controller;
use Symfony\Component\HttpFoundation\Request;
use AppBundle\Entity\Message;
use AppBundle\Entity\Notification;
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

       $notification = new Notification();

       if($form->isSubmitted()){
         $message->setExpediteur($usr);
         $message->setDestinataire($destinataire);
         $message->setStatut("Non lu");
         $message->setDate(new \DateTime());
         $em->persist($message);
         $em->flush();

         // Création d'une notification
         $notification->setMessage("vous à envoyez un message");
         $notification->setExpediteur($usr);
         $notification->setDestinataire($destinataire);
         $em->persist($notification);
         $em->flush();


         $session->getFlashBag()->add('success', 'Votre message à été envoyée !');
         return $this->render('messages/newMessage.html.twig', array(
                           'form' => $form->createView(),
                           'destinataire' => $destinataire,
       ));
         }

         // replace this example code with whatever you need
         return $this->render('messages/newMessage.html.twig', array(
                           'form' => $form->createView(),
                           'destinataire' => $destinataire,
       ));
  }

  /**
   * @Route("/messages/showMessage/{id}", name="showMessage")
   */
  public function showMessageAction(Request $request, $id)
  {
      //$this->denyAccessUnlessGranted('ROLE_ADMIN', null, 'Unable to access this page!');
      $usr = $this->get('security.token_storage')->getToken()->getUser();
      $session = new Session();
      $em = $this->getDoctrine()->getManager();
      $message = $em->getRepository('AppBundle:Message')->getById($id);
      $message->setStatut("Lu");
      $em->persist($message);
      $em->flush();

      $repMessage = new Message();
      $form = $this->createForm(MessageType::class, $repMessage);
      $form->handleRequest($request);

      if($form->isSubmitted()){
        $repMessage->setExpediteur($usr);
        $repMessage->setDestinataire($message->getExpediteur());
        $repMessage->setDate(new \DateTime());
        $repMessage->setAncienMessage($message);
        $repMessage->setStatut("Lu et répondu");
        $em->persist($repMessage);
        $em->flush();

        // Création d'une notification
        $notification = new Notification();
        $notification->setMessage("à répondu à votre message");
        $notification->setExpediteur($usr);
        $notification->setDestinataire($message->getExpediteur());
        $em->persist($notification);
        $em->flush();

        $session->getFlashBag()->add('success', 'Votre réponse à été envoyée !');
        return $this->redirect('/mesMessages');
      }
      return $this->render('messages/showMessage.html.twig', array(
                        'form' => $form->createView(),
                        'message' => $message


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
