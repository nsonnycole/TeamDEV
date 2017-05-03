<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass = "AppBundle\Repository\UserRepository")
 * @ORM\Table(name="utilisateur")
 */
class User extends BaseUser
{
    /**
     * @ORM\Id
     * @ORM\Column(type="integer")
     * @ORM\GeneratedValue(strategy="AUTO")
     */
    protected $id;

    /**
    * @var Type de profil normal ou admin.
    *
    * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\TypeProfil")
    * @ORM\JoinColumn(name = "idTypeProfil", onDelete = "cascade")
    */
    protected  $idTypeProfil;


    /**
     *
     * @ORM\Column(type="string")
     *
     */
    protected $nom;

    /**
     *
     * @ORM\Column(type="string")
     *
     */
    protected $prenom;

    /**
     *
     * @ORM\Column(type="text")
     *
     */
    protected $adresse;

    /**
     *
     * @ORM\Column(type="date")
     *
     */
    protected $dateNaiss;



    public function __construct()
    {
        parent::__construct();
        // your own logic
    }

    /**
     * Set idTypeProfil
     *
     * @param \AppBundle\Entity\TypeProfil $idTypeProfil
     *
     * @return User
     */
    public function setIdTypeProfil(\AppBundle\Entity\TypeProfil $idTypeProfil = null)
    {
        $this->idTypeProfil = $idTypeProfil;

        return $this;
    }

    /**
     * Get idTypeProfil
     *
     * @return \AppBundle\Entity\TypeProfil
     */
    public function getIdTypeProfil()
    {
        return $this->idTypeProfil;
    }


    /**
     * Set nom
     *
     * @param string $nom
     *
     * @return User
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
     * Set prenom
     *
     * @param string $prenom
     *
     * @return User
     */
    public function setPrenom($prenom)
    {
        $this->prenom = $prenom;

        return $this;
    }

    /**
     * Get prenom
     *
     * @return string
     */
    public function getPrenom()
    {
        return $this->prenom;
    }

    /**
     * Set dateNaiss
     *
     * @param \DateTime $dateNaiss
     *
     * @return User
     */
    public function setDateNaiss($dateNaiss)
    {
        $this->dateNaiss = $dateNaiss;

        return $this;
    }

    /**
     * Get dateNaiss
     *
     * @return \DateTime
     */
    public function getDateNaiss()
    {
        return $this->dateNaiss;
    }

    /**
     * Set adresse
     *
     * @param string $adresse
     *
     * @return User
     */
    public function setAdresse($adresse)
    {
        $this->adresse = $adresse;

        return $this;
    }

    /**
     * Get adresse
     *
     * @return string
     */
    public function getAdresse()
    {
        return $this->adresse;
    }
}