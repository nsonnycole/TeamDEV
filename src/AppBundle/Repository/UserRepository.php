<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\User;


/**
 * Repository des utilisateurs.
 */
class UserRepository extends EntityRepository
{
  /**
  *
  * Retourne un utilisateur
  *
  **/
  public function getById($id)
  {
    $query = $this->createQueryBuilder('u')
    ->where('u.id = :id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
  *
  * Retourne un utilisateur en fonction de son username
  *
  **/
  public function getByUsername($username)
  {
    $query = $this->createQueryBuilder('u')
    ->where('u.username = :username')
    ->setParameter('username', $username)
    ->getQuery();
    return $query -> getSingleResult();
  }

}
