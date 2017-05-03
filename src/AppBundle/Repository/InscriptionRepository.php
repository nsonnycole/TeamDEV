<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\Inscription;


/**
 * Repository des projets.
 */
class InscriptionRepository extends EntityRepository
{


    /**
    *
    * Retourne la liste des inscriptions
    *
    **/
    public function getById($id)
    {
      $query = $this->createQueryBuilder('inscription')
      ->where('inscription.id =:id')
      ->setParameter('id', $id)
      ->getQuery();
      return $query -> getSingleResult();
    }

    /**
    *
    * Retourne la liste des participants à ce projet
    *
    **/
    public function getparticipantProjet($id)
    {
      $query = $this->createQueryBuilder('inscription')
            //->where('inscription.id =:id')
            //->setParameter('id', $id)
            ->getQuery();
      return $query->getResult();
    }


}
