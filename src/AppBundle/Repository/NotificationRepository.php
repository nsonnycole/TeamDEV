<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Competence;


/**
* Repository des norifications.
*/
class NotificationRepository extends EntityRepository
{


  /**
  *
  * Retourne la liste des notifications
  *
  **/
  public function getById($id)
  {
    $query = $this->createQueryBuilder('notification')
    ->where('notification.id =:id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
  *
  * Retourne la liste des participants à ce projet
  *
  **/
  public function getNotificationUser($userID)
  {
    $query = $this->createQueryBuilder('notif')
    ->where('notif.destinataire=:userID')
    ->setParameter('userID', $userID)
    ->getQuery();
    return $query->getResult();
  }
}
