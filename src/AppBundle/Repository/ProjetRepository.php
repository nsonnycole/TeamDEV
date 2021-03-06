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



  /**
  *
  * Retourne la liste des technologies pour ce projet
  *
  **/

  public function recherche($texte){
    $query = $this->createQueryBuilder('p')

          ->Where('p.nomProjet LIKE \''.$texte.'\'')
          ->orWhere('p.description LIKE \''.$texte.'\'')
          ->orderBy('p.id', 'DESC')
          ->setParameter('texte', $texte)
          ->getQuery();
    return $query->getResult();
  }



  public function getProjetTechno($id)
  {
    $query = $this->createQueryBuilder('p')
          ->where('p.id = :id')
          ->orderBy('p.id', 'DESC')
          ->setParameter('id', $id)
          ->getQuery();
    return $query->getResult();
  }

  public function getNbProjetUser($usr){
    $query = $this->createQueryBuilder('p')
            ->select('count(p.id)')
            ->where('p.idUtilisateur = :usr')
            ->setParameter('usr', $usr)
            ->getQuery();
  return $query->getSingleScalarResult();
  }




}
