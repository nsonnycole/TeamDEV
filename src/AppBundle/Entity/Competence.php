<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;
use Symfony\Component\Validator\Constraints as Assert;
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
  protected  $nom;

  /**
  * @var Utilisateur correspondant à cette inscription.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
  * @ORM\JoinColumn(name = "idUtilisateur", onDelete = "cascade")
  */
  protected  $idUtilisateur;

  /**
   * @var integer pourcentage
   *
   * @ORM\Column(name = "pourcentage", type = "integer", nullable = false)
   * @Assert\Range(
    *      min = 0,
    *      max = 100,
    *      minMessage = "min 0",
    *      maxMessage = "max 100"
    *
    * )
   */
  protected  $pourcentage;


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

    /**
     * Set pourcentage
     *
     * @param integer $pourcentage
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
     * @return integer
     */
    public function getPourcentage()
    {
        return $this->pourcentage;
    }
}
