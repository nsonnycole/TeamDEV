<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass = "AppBundle\Repository\CompetenceRepository")
* @ORM\Table(name="competence")
*/
class Competence
{
  /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;
  /**
   * @var String nom de la Competence
   *
   * @ORM\Column(name = "nom", type = "string", nullable = false)
   */
  private  $nom;

  /**
  * @var Utilisateur correspondant à cette inscription.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
  * @ORM\JoinColumn(name = "idUtilisateur", onDelete = "cascade")
  */
  private  $idUtilisateur;

  /**
   * @var String pourcentage
   *
   * @ORM\Column(name = "pourcentage", type = "string", nullable = false)
   */
  private  $pourcentage;


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
     * Set nom
     *
     * @param string $nom
     *
     * @return Competence
     */
    public function setNom($nom)
    {
        $this->nom = $nom;

        return $this;
    }

    /**
     * Get nom
     *
     * @return string
     */
    public function getNom()
    {
        return $this->nom;
    }

    /**
     * Set pourcentage
     *
     * @param string $pourcentage
     *
     * @return Competence
     */
    public function setPourcentage($pourcentage)
    {
        $this->pourcentage = $pourcentage;

        return $this;
    }

    /**
     * Get pourcentage
     *
     * @return string
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }

    /**
     * Set idUtilisateur
     *
     * @param \AppBundle\Entity\User $idUtilisateur
     *
     * @return Competence
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
}
