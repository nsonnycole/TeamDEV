<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass = "AppBundle\Repository\InscriptionRepository")
* @ORM\Table(name="inscription")
*/
class Inscription
{
  /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;
  /**
  * @var String
  *
  * @ORM\Column(name = "statut", type = "string", nullable = true)
  */
  protected  $statut;
  /**
  * @var String
  *
  * @ORM\Column(name = "commentaire", type = "string", nullable = true)
  */
  protected  $commentaire;

  /**
  * @var Utilisateur correspondant à cette inscription.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
  * @ORM\JoinColumn(name = "idUtilisateur", onDelete = "cascade")
  */
  protected  $idUtilisateur;

  /**
  * @var Utilisateur correspondant à cette inscription.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\Projet")
  * @ORM\JoinColumn(name = "idProjet", onDelete = "cascade")
  */
  protected  $idProjet;

  /**
  * Get id
  *
  * @return integer
  */
  public function getId()
  {
    return $this->id;
  }

  /**
  * Set status
  *
  * @param string $status
  *
  * @return Inscription
  */
  public function setStatus($status)
  {
    $this->status = $status;

    return $this;
  }

  /**
  * Get status
  *
  * @return string
  */
  public function getStatus()
  {
    return $this->status;
  }

    /**
     * Set idUtilisateur
     *
     * @param \AppBundle\Entity\User $idUtilisateur
     *
     * @return Inscription
     */
    public function setIdUtilisateur(\AppBundle\Entity\User $idUtilisateur = null)
    {
        $this->idUtilisateur = $idUtilisateur;

        return $this;
    }

    /**
     * Get idUtilisateur
     *
     * @return \AppBundle\Entity\User
     */
    public function getIdUtilisateur()
    {
        return $this->idUtilisateur;
    }

    /**
     * Set idProjet
     *
     * @param \AppBundle\Entity\Projet $idProjet
     *
     * @return Inscription
     */
    public function setIdProjet(\AppBundle\Entity\Projet $idProjet = null)
    {
        $this->idProjet = $idProjet;

        return $this;
    }

    /**
     * Get idProjet
     *
     * @return \AppBundle\Entity\Projet
     */
    public function getIdProjet()
    {
        return $this->idProjet;
    }


    /**
     * Set commentaire
     *
     * @param string $commentaire
     *
     * @return Inscription
     */
    public function setCommentaire($commentaire)
    {
        $this->commentaire = $commentaire;

        return $this;
    }

    /**
     * Get commentaire
     *
     * @return string
     */
    public function getCommentaire()
    {
        return $this->commentaire;
    }


    /**
     * Set statut
     *
     * @param string $statut
     *
     * @return Inscription
     */
    public function setStatut($statut)
    {
        $this->statut = $statut;

        return $this;
    }

    /**
     * Get statut
     *
     * @return string
     */
    public function getStatut()
    {
        return $this->statut;
    }
}
