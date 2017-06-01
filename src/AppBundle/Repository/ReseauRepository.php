<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Reseau;


/**
* Repository des reseaux.
*/
class ReseauRepository extends EntityRepository
{

  /**
  *
  * Retourne la liste des inscriptions
  *
  **/
  public function getById($id)
  {
    $query = $this->createQueryBuilder('reseau')
    ->where('reseau.id =:id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
  *
  * Retourne la liste des participants à ce projet
  *
  **/
  public function getReseauUser($userID)
  {
    $query = $this->createQueryBuilder('res')
    ->where('res.idUtilisateur =:userID')
    ->setParameter('userID', $userID)
    ->getQuery();
    return $query->getResult();
  }
}
