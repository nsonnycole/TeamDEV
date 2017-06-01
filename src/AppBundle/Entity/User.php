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
    protected $presentation;

    /**
     *
     * @ORM\Column(type="text",nullable = true)
     *
     */
    protected $adresse;

    /**
     *
     * @ORM\Column(type="date")
     *
     */
    protected $dateNaiss;

    /**
     *
     * @ORM\Column(type="integer", nullable = true)
     *
     */
    protected $trophee;


    /**
    * @var messages.
    *
    * @ORM\ManyToMany(targetEntity = "AppBundle\Entity\Message",cascade={"persist","remove"})
    * @ORM\JoinColumn(name = "messages", onDelete = "cascade")
    */
    protected  $messages;




    /**
    * @var avatar de l'user.
    *
    * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\Avatar")
    * @ORM\JoinColumn(name = "avatar")
    */
    protected $avatar;

    public function __construct()
    {
        parent::__construct();
        // your own logic
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



    /**
     * Set trophee
     *
     * @param integer $trophee
     *
     * @return User
     */
    public function setTrophee($trophee)
    {
        $this->trophee = $trophee;

        return $this;
    }

    /**
     * Get trophee
     *
     * @return integer
     */
    public function getTrophee()
    {
        return $this->trophee;
    }

    /**
     * Add message
     *
     * @param \AppBundle\Entity\Message $message
     *
     * @return User
     */
    public function addMessage(\AppBundle\Entity\Message $message)
    {
        $this->messages[] = $message;

        return $this;
    }

    /**
     * Remove message
     *
     * @param \AppBundle\Entity\Message $message
     */
    public function removeMessage(\AppBundle\Entity\Message $message)
    {
        $this->messages->removeElement($message);
    }

    /**
     * Get messages
     *
     * @return \Doctrine\Common\Collections\Collection
     */
    public function getMessages()
    {
        return $this->messages;
    }


    /**
     * Set avatar
     *
     * @param \AppBundle\Entity\Avatar $avatar
     *
     * @return User
     */
    public function setAvatar(\AppBundle\Entity\Avatar $avatar = null)
    {
        $this->avatar = $avatar;

        return $this;
    }

    /**
     * Get avatar
     *
     * @return \AppBundle\Entity\Avatar
     */
    public function getAvatar()
    {
        return $this->avatar;
    }

    /**
     * Set presentation
     *
     * @param string $presentation
     *
     * @return User
     */
    public function setPresentation($presentation)
    {
        $this->presentation = $presentation;

        return $this;
    }

    /**
     * Get presentation
     *
     * @return string
     */
    public function getPresentation()
    {
        return $this->presentation;
    }
}
