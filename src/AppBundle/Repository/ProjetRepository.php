<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;
use AppBundle\Entity\TypeProjet;


/**
 * Repository des projets.
 */
class ProjetRepository extends EntityRepository
{

  /**
  *
  * Retourne la liste des projets
  *
  **/
  public function getById($id)
  {
    $query = $this->createQueryBuilder('projet')
    ->where('projet.id = :id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
	*
	* Retourne la liste des projets
	*
	**/
	public function getAll()
	{
		$query = $this->createQueryBuilder('p')
   				->orderBy('p.id', 'DESC')
					->setMaxResults(5)
				  ->getQuery();
		return $query->getResult();
	}

  /**
  *
  * Retourne la liste des projets de l'utilisateur en session
  *
  **/
  public function getProjetByuser($usr)
  {
    $query = $this->createQueryBuilder('p')
          ->where('p.idUtilisateur = :usr')
          ->orderBy('p.id', 'DESC')
          ->setParameter('usr', $usr)
          ->getQuery();
    return $query->getResult();
  }






}
