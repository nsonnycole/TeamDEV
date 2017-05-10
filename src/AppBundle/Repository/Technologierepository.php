<?php

namespace AppBundle\Repository;

use Doctrine\ORM\EntityRepository;



/**
 * Repository des technologies.
 */
class TechnologieRepository extends EntityRepository
{

  /**
  *
  * Retourne la liste des technologies
  *
  **/
  public function getById($id)
  {
    $query = $this->createQueryBuilder('techno')
    ->where('techno.id = :id')
    ->setParameter('id', $id)
    ->getQuery();
    return $query -> getSingleResult();
  }

  /**
	*
	* Retourne la liste des technologie
	*
	**/
	public function getAll()
	{
		$query = $this->createQueryBuilder('t')
   				->orderBy('t.id', 'ASC')
				  ->getQuery();
		return $query->getResult();
	}






}
