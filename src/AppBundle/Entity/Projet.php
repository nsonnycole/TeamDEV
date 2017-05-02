<?php
namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;

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
  *
  * @ORM\Column(name = "nomProjet", type = "string", length = 255, nullable = false)
  */
  private  $nomProjet;
  /**
  * @var String description du projet
  *
  * @ORM\Column(name = "description", type = "string", length = 255, nullable = false)
  */
  private  $description;
  /**
  * @var String contenu
  *
  * @ORM\Column(name = "contenu", type = "string", nullable = false)
  */
  private  $contenu;
  /**
  * @var Date date de début du projet
  *
  * @ORM\Column(name = "dateDebut", type = "date", nullable = true)
  */
  private  $dateDebut;
  /**
  * @var Date de fin du projet
  *
  * @ORM\Column(name = "dateFin", type = "date", nullable = true)
  */
  private  $dateFin;
  /**
  * @var Int Durée projet
  *
  * @ORM\Column(name = "duree", type = "integer", nullable = true)
  */
  private  $duree;
  /**
  * @var Int nbPlaces
  *
  * @ORM\Column(name = "nbPlaces", type = "integer", nullable = true)
  */
  private  $nbPlaces;
  /**
  * @var Int nombre de participants au projet
  *
  * @ORM\Column(name = "nbParticipants", type = "integer", nullable = true)
  */
  private  $nbParticipants;
  /**
  * @var String statut du projet (fermé ouvert)
  *
  * @ORM\Column(name = "statut", type = "string", nullable = true)
  */
  private  $statut;

  /**
  * @var Utilisateur créateur de ce projet.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
  * @ORM\JoinColumn(name = "idUtilisateur", onDelete = "cascade")
  */
  private  $idUtilisateur;

  /**
  * @var Type de ce projet.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\TypeProjet")
  * @ORM\JoinColumn(name = "idTypeProjet", onDelete = "cascade")
  */
  private  $idTypeProjet;

  /**
  * @ORM\Column(type="string", length=255, nullable=true)
  */
  public $pictureName;

  /**
  * @Assert\File(maxSize="500k")
  */
  public $file;

  public function getWebPath()
  {
    return null === $this->pictureName ? null : $this->getUploadDir().'/'.$this->pictureName;
  }

  protected function getUploadRootDir()
  {
    // le chemin absolu du répertoire dans lequel sauvegarder les photos de profil
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

  public function __construct()
  {

  }


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
  * Set status
  *
  * @param string $status
  *
  * @return Projet
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
  * Set statut
  *
  * @param string $statut
  *
  * @return Projet
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
}
