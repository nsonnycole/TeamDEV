<?php
namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;

/**
* @ORM\Entity(repositoryClass = "AppBundle\Repository\ProjetRepository")
* @ORM\Table(name="projet")
*/
class Projet
{
  /**
  * @ORM\Id
  * @ORM\Column(type="integer")
  * @ORM\GeneratedValue(strategy="AUTO")
  */
  protected $id;
  /**
  * @var String le nom du projet
  * @Assert\NotBlank(message="Le nom du projet ne peut être vide")
  * @Assert\Length(
  *      min = "20",
  *      max = "255",
  *      minMessage = "Votre nom doit faire au moins {{ limit }} caractères",
  *      maxMessage = "Votre nom ne peut pas être plus long que {{ limit }} caractères"
  * )
  * @ORM\Column(name = "nomProjet", type = "string", length = 255, nullable = false)
  */
  protected  $nomProjet;
  /**
  * @var String description du projet
  *
  * @Assert\NotBlank(message="La description ne peut être vide")
  * @Assert\Length(
  *      min = "20",
  *      max = "255",
  *      minMessage = "Votre description doit faire au moins {{ limit }} caractères",
  *      maxMessage = "Votre description ne peut pas être plus long que {{ limit }} caractères"
  * )
  * @ORM\Column(name = "description", type = "string", length = 255, nullable = false)
  */
  protected  $description;
  /**
  * @var String contenu
  *
  * @Assert\NotBlank(message="Le contenu ne peut être vide")
  * @Assert\Length(
  *      min = "20",
  *      max = "255",
  *      minMessage = "Votre contenu doit faire au moins {{ limit }} caractères",
  *      maxMessage = "Votre contenu ne peut pas être plus long que {{ limit }} caractères"
  * )
  * @ORM\Column(name = "contenu", type = "string", nullable = false)
  */
  protected  $contenu;
  /**
  * @var Date date de début du projet
  *
  * @ORM\Column(name = "dateDebut", type = "date", nullable = false)
  * @Assert\Range(
  *      min = "first day of January",
  *      max = "first day of January next year"
  * )
  */
  private  $dateDebut;
  /**
  * @var Date de fin du projet
  *
  * @ORM\Column(name = "dateFin", type = "date", nullable = false)
  * @Assert\Range(
  *      min = "first day of January",
  *      max = "first day of January next year"
  * )
  */
  protected  $dateFin;
  /**
  * @var Int Durée projet
  *
  * @ORM\Column(name = "duree", type = "integer", nullable = true)
  */
  protected  $duree;
  /**
  * @var Int nbPlaces
  *
  * @ORM\Column(name = "nbPlaces", type = "integer", nullable = false)
  */
  protected  $nbPlaces;
  /**
  * @var Int nombre de participants au projet
  *
  * @ORM\Column(name = "nbParticipants", type = "integer", nullable = false)
  */
  protected  $nbParticipants;

  /**
  * @var statut du projet.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\Statut")
  * @ORM\JoinColumn(name = "statut")
  */
  protected  $statut;

  /**
  * @var Utilisateur créateur de ce projet.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
  * @ORM\JoinColumn(name = "idUtilisateur", onDelete = "cascade")
  */
  protected  $idUtilisateur;

  /**
  * @var Type de ce projet.
  *
  * @ORM\ManyToMany(targetEntity = "AppBundle\Entity\TypeProjet",cascade={"persist","remove"})
  * @ORM\JoinColumn(name = "idTypeProjet", onDelete = "cascade")
  */
  protected  $idTypeProjet;
  /**
  * @ORM\Column(name = "url",type="string", length=255, nullable=true)
  */
  public $url;
  /**
  * @ORM\Column(type="string", length=255, nullable=true)
  */
  public $pictureName;

  /**
  * @Assert\File(maxSize="1024k")
  */
  public $file;

  public function getWebPath()
  {
    return null === $this->pictureName ? null : $this->getUploadDir().'/'.$this->pictureName;
  }

  protected function getUploadRootDir()
  {
    // le chemin absolu du répertoire dans lequel sauvegarder les photos
    return __DIR__.'/../../../../web/'.$this->getUploadDir();
  }

  protected function getUploadDir()
  {
    // get rid of the __DIR__ so it doesn't screw when displaying uploaded doc/image in the view.
    return 'uploads/pictures';
  }

  public function uploadProfilePicture()
  {
    // Nous utilisons le nom de fichier original, donc il est dans la pratique
    // nécessaire de le nettoyer pour éviter les problèmes de sécurité

    // move copie le fichier présent chez le client dans le répertoire indiqué.
    $this->file->move($this->getUploadRootDir(), $this->file->getClientOriginalName());

    // On sauvegarde le nom de fichier
    $this->pictureName = $this->file->getClientOriginalName();

    // La propriété file ne servira plus
    $this->file = null;
  }

  /**
  * @var technologies du projet.
  *
  * @ORM\ManyToMany(targetEntity = "AppBundle\Entity\Technologie", cascade={"persist"})
  * @ORM\JoinColumn(name = "technologies",onDelete = "cascade")
  */
  protected  $technologies;


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
  * Set nomProjet
  *
  * @param string $nomProjet
  *
  * @return Projet
  */
  public function setNomProjet($nomProjet)
  {
    $this->nomProjet = $nomProjet;

    return $this;
  }

  /**
  * Get nomProjet
  *
  * @return string
  */
  public function getNomProjet()
  {
    return $this->nomProjet;
  }

  /**
  * Set description
  *
  * @param string $description
  *
  * @return Projet
  */
  public function setDescription($description)
  {
    $this->description = $description;

    return $this;
  }

  /**
  * Get description
  *
  * @return string
  */
  public function getDescription()
  {
    return $this->description;
  }

  /**
  * Set contenu
  *
  * @param string $contenu
  *
  * @return Projet
  */
  public function setContenu($contenu)
  {
    $this->contenu = $contenu;

    return $this;
  }

  /**
  * Get contenu
  *
  * @return string
  */
  public function getContenu()
  {
    return $this->contenu;
  }

  /**
  * Set dateDebut
  *
  * @param \DateTime $dateDebut
  *
  * @return Projet
  */
  public function setDateDebut($dateDebut)
  {
    $this->dateDebut = $dateDebut;

    return $this;
  }

  /**
  * Get dateDebut
  *
  * @return \DateTime
  */
  public function getDateDebut()
  {
    return $this->dateDebut;
  }

  /**
  * Set dateFin
  *
  * @param \DateTime $dateFin
  *
  * @return Projet
  */
  public function setDateFin($dateFin)
  {
    $this->dateFin = $dateFin;

    return $this;
  }

  /**
  * Get dateFin
  *
  * @return \DateTime
  */
  public function getDateFin()
  {
    return $this->dateFin;
  }

  /**
  * Set duree
  *
  * @param integer $duree
  *
  * @return Projet
  */
  public function setDuree($duree)
  {
    $this->duree = $duree;

    return $this;
  }

  /**
  * Get duree
  *
  * @return integer
  */
  public function getDuree()
  {
    return $this->duree;
  }

  /**
  * Set nbPlaces
  *
  * @param integer $nbPlaces
  *
  * @return Projet
  */
  public function setNbPlaces($nbPlaces)
  {
    $this->nbPlaces = $nbPlaces;

    return $this;
  }

  /**
  * Get nbPlaces
  *
  * @return integer
  */
  public function getNbPlaces()
  {
    return $this->nbPlaces;
  }

  /**
  * Set nbParticipants
  *
  * @param integer $nbParticipants
  *
  * @return Projet
  */
  public function setNbParticipants($nbParticipants)
  {
    $this->nbParticipants = $nbParticipants;

    return $this;
  }

  /**
  * Get nbParticipants
  *
  * @return integer
  */
  public function getNbParticipants()
  {
    return $this->nbParticipants;
  }

  /**
  * Set url
  *
  * @param string $url
  *
  * @return Projet
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
  * Set pictureName
  *
  * @param string $pictureName
  *
  * @return Projet
  */
  public function setPictureName($pictureName)
  {
    $this->pictureName = $pictureName;

    return $this;
  }

  /**
  * Get pictureName
  *
  * @return string
  */
  public function getPictureName()
  {
    return $this->pictureName;
  }

  /**
  * Set statut
  *
  * @param \AppBundle\Entity\Statut $statut
  *
  * @return Projet
  */
  public function setStatut(\AppBundle\Entity\Statut $statut = null)
  {
    $this->statut = $statut;

    return $this;
  }

  /**
  * Get statut
  *
  * @return \AppBundle\Entity\Statut
  */
  public function getStatut()
  {
    return $this->statut;
  }

  /**
  * Set idUtilisateur
  *
  * @param \AppBundle\Entity\User $idUtilisateur
  *
  * @return Projet
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
  * Set idTypeProjet
  *
  * @param \AppBundle\Entity\TypeProjet $idTypeProjet
  *
  * @return Projet
  */
  public function setIdTypeProjet(\AppBundle\Entity\TypeProjet $idTypeProjet = null)
  {
    $this->idTypeProjet = $idTypeProjet;

    return $this;
  }

  /**
  * Get idTypeProjet
  *
  * @return \AppBundle\Entity\TypeProjet
  */
  public function getIdTypeProjet()
  {
    return $this->idTypeProjet;
  }

    /**
     * Set technologies
     *
     * @param \AppBundle\Entity\Technologie $technologies
     *
     * @return Projet
     */
    public function setTechnologies(\AppBundle\Entity\Technologie $technologies = null)
    {
        $this->technologies = $technologies;

        return $this;
    }

    /**
     * Get technologies
     *
     * @return \AppBundle\Entity\Technologie
     */
    public function getTechnologies()
    {
        return $this->technologies;
    }
    /**
     * Constructor
     */
    public function __construct()
    {
        $this->idTypeProjet = new \Doctrine\Common\Collections\ArrayCollection();
        $this->technologies = new \Doctrine\Common\Collections\ArrayCollection();
    }

    /**
     * Add idTypeProjet
     *
     * @param \AppBundle\Entity\TypeProjet $idTypeProjet
     *
     * @return Projet
     */
    public function addIdTypeProjet(\AppBundle\Entity\TypeProjet $idTypeProjet)
    {
        $this->idTypeProjet[] = $idTypeProjet;

        return $this;
    }

    /**
     * Remove idTypeProjet
     *
     * @param \AppBundle\Entity\TypeProjet $idTypeProjet
     */
    public function removeIdTypeProjet(\AppBundle\Entity\TypeProjet $idTypeProjet)
    {
        $this->idTypeProjet->removeElement($idTypeProjet);
    }

    /**
     * Add technology
     *
     * @param \AppBundle\Entity\Technologie $technology
     *
     * @return Projet
     */
    public function addTechnology(\AppBundle\Entity\Technologie $technology)
    {
        $this->technologies[] = $technology;

        return $this;
    }

    /**
     * Remove technology
     *
     * @param \AppBundle\Entity\Technologie $technology
     */
    public function removeTechnology(\AppBundle\Entity\Technologie $technology)
    {
        $this->technologies->removeElement($technology);
    }
}
