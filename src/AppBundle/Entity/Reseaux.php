<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass = "AppBundle\Repository\ReseauRepository")
 * @ORM\Table(name="reseaux")
 */
class Reseaux
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
     * @var String nom du type
     *
     * @ORM\Column(name = "nom", type = "string", nullable = false)
     */
    private  $nom;

    /**
     * @var String nom du type
     *
     * @ORM\Column(name = "url", type = "string", nullable = false)
     */
    private  $url;


    /**
    * @var Utilisateur pour ce reseau.
    *
    * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
    * @ORM\JoinColumn(name = "idUtilisateur", onDelete = "cascade")
    */
    protected  $idUtilisateur;

    /**
    * @var Utilisateur pour ce reseau.
    *
    * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\TypeReseau")
    * @ORM\JoinColumn(name = "idTypeReseau", onDelete = "cascade")
    */
    protected  $idTypeReseau;

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
     * Set url
     *
     * @param string $url
     *
     * @return Reseaux
     */
    public function setUrl($url)
    {
        $this->url = $url;

        return $this;
    }

    /**
     * Get url
     *
     * @return string
     */
    public function getUrl()
    {
        return $this->url;
    }

    /**
     * Set idUtilisateur
     *
     * @param \AppBundle\Entity\User $idUtilisateur
     *
     * @return Reseaux
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
     * Set nom
     *
     * @param string $nom
     *
     * @return Reseaux
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
     * Set idTypeReseau
     *
     * @param \AppBundle\Entity\TypeReseau $idTypeReseau
     *
     * @return Reseaux
     */
    public function setIdTypeReseau(\AppBundle\Entity\TypeReseau $idTypeReseau = null)
    {
        $this->idTypeReseau = $idTypeReseau;

        return $this;
    }

    /**
     * Get idTypeReseau
     *
     * @return \AppBundle\Entity\TypeReseau
     */
    public function getIdTypeReseau()
    {
        return $this->idTypeReseau;
    }
}
