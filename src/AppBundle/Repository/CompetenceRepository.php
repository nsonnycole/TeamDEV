<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Competence;


/**
* Repository des projets.
*/
class CompetenceRepository extends EntityRepository
{


  /**
  *
  * Retourne la liste des inscriptions
  *
  **/
  public function getById($id)
  {
    $query = $this->createQueryBuilder('competence')
    ->where('competence.id =:id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
  *
  * Retourne la liste des participants à ce projet
  *
  **/
  public function getCompetenceUser($userID)
  {
    $query = $this->createQueryBuilder('comp')
    ->where('comp.idUtilisateur =:userID')
    ->setParameter('userID', $userID)
    ->getQuery();
    return $query->getSingleResult();
  }
}
