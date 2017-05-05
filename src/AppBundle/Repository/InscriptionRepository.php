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
  public function getparticipantProjet($projet)
  {
    $query = $this->createQueryBuilder('ins')
    ->where('ins.idProjet =:projet')
    ->setParameter('projet', $projet)
    ->getQuery();
    return $query->getResult();
  }


  /**
  *
  * Retourne la liste des participants inscrit à ce projet
  *
  **/
  public function getUserInscrit($usr)
  {
    $query = $this->createQueryBuilder('ins')
    ->where('ins.idUtilisateur =:usr')
    ->setParameter('usr', $usr)
    ->getQuery();
    return $query->getResult();
  }
  /**
  *
  * Retourne la liste des participants inscrit à ce projet
  *
  **/
  public function getUserInscritprojet($user, $projet)
  {
    $query = $this->getEntityManager()
            ->createQuery('
                SELECT u FROM AppBundle:Inscription u
                WHERE u.idUtilisateur = :user AND u.idProjet = :projet')
                ->setParameter('user', $user)
                ->setParameter('projet', $projet);
    return $query -> getSingleResult();
  }





}
