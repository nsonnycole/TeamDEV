<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Inscription;


/**
* Repository des projets.
*/
class MessageRepository extends EntityRepository
{


  /**
  *
  * Retourne le message
  *
  **/
  public function getById($id)
  {
    $query = $this->createQueryBuilder('message')
    ->where('message.id =:id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
  *
  * Retourne la liste des messages
  *
  **/
  public function getAll()
  {
    $query = $this->createQueryBuilder('message')
    ->orderBy('message.id', 'DESC')
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
  *
  * Retourne la liste des messages de cette user
  *
  **/

  public function getMessageUser($usr)
  {
    $query = $this->createQueryBuilder('message')
    ->where('message.destinataire =:usr')
    ->setParameter('usr', $usr)
    ->getQuery();
    return $query->getResult();
  }

}
