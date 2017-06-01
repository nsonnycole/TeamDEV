<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
* @ORM\Entity(repositoryClass = "AppBundle\Repository\MessageRepository")
* @ORM\Table(name="message")
*/
class Message
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
  * @ORM\Column(name = "objet", type = "string", nullable = true)
  */
  protected  $objet;
  /**
  * @var String
  *
  * @ORM\Column(name = "message", type = "string", nullable = true)
  */
  protected  $message;

  /**
  * @var Utilisateur correspondant à cette inscription.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
  * @ORM\JoinColumn(name = "idExp", onDelete = "cascade")
  */
  protected  $expediteur;

  /**
  * @var Utilisateur correspondant à cette inscription.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
  * @ORM\JoinColumn(name = "idDest", onDelete = "cascade")
  */
  protected  $destinataire;

  /**
  * @var Date date de reception du message
  *
  * @ORM\Column(name = "date", type = "datetime", nullable = true)
  */
  protected  $date;

  
  /**
  * @var ancien message.
  *
  * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\Message")
  * @ORM\JoinColumn(name = "ancienMessage", onDelete = "cascade")
  */
  protected  $ancienMessage;



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
     * Set statut
     *
     * @param string $statut
     *
     * @return Message
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
     * Set objet
     *
     * @param string $objet
     *
     * @return Message
     */
    public function setObjet($objet)
    {
        $this->objet = $objet;

        return $this;
    }

    /**
     * Get objet
     *
     * @return string
     */
    public function getObjet()
    {
        return $this->objet;
    }

    /**
     * Set message
     *
     * @param string $message
     *
     * @return Message
     */
    public function setMessage($message)
    {
        $this->message = $message;

        return $this;
    }

    /**
     * Get message
     *
     * @return string
     */
    public function getMessage()
    {
        return $this->message;
    }

    /**
     * Set expediteur
     *
     * @param \AppBundle\Entity\User $expediteur
     *
     * @return Message
     */
    public function setExpediteur(\AppBundle\Entity\User $expediteur = null)
    {
        $this->expediteur = $expediteur;

        return $this;
    }

    /**
     * Get expediteur
     *
     * @return \AppBundle\Entity\User
     */
    public function getExpediteur()
    {
        return $this->expediteur;
    }

    /**
     * Set destinataire
     *
     * @param \AppBundle\Entity\User $destinataire
     *
     * @return Message
     */
    public function setDestinataire(\AppBundle\Entity\User $destinataire = null)
    {
        $this->destinataire = $destinataire;

        return $this;
    }

    /**
     * Get destinataire
     *
     * @return \AppBundle\Entity\User
     */
    public function getDestinataire()
    {
        return $this->destinataire;
    }

    /**
     * Set date
     *
     * @param \DateTime $date
     *
     * @return Message
     */
    public function setDate($date)
    {
        $this->date = $date;

        return $this;
    }

    /**
     * Get date
     *
     * @return \DateTime
     */
    public function getDate()
    {
        return $this->date;
    }

    /**
     * Set ancienMessage
     *
     * @param \AppBundle\Entity\Message $ancienMessage
     *
     * @return Message
     */
    public function setAncienMessage(\AppBundle\Entity\Message $ancienMessage = null)
    {
        $this->ancienMessage = $ancienMessage;

        return $this;
    }

    /**
     * Get ancienMessage
     *
     * @return \AppBundle\Entity\Message
     */
    public function getAncienMessage()
    {
        return $this->ancienMessage;
    }
}
