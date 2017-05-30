<?php
namespace AppBundle\Entity;

use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity(repositoryClass = "AppBundle\Repository\NotificationRepository")
 * @ORM\Table(name="notification")
 */
class Notification
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
     * @ORM\Column(name = "message", type = "string", nullable = false)
     */
    private  $message;

    /**
    * @var Utilisateur correspondant à cette cette notification.
    *
    * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
    * @ORM\JoinColumn(name = "IdDestinataire", onDelete = "cascade")
    */
    private  $destinataire;

    /**
    * @var Utilisateur correspondant à cette notification.
    *
    * @ORM\ManyToOne(targetEntity = "AppBundle\Entity\User")
    * @ORM\JoinColumn(name = "IdExpediteur", onDelete = "cascade")
    */
    private  $expediteur;

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
     * Set message
     *
     * @param string $message
     *
     * @return Notification
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
     * Set destinataire
     *
     * @param \AppBundle\Entity\User $destinataire
     *
     * @return Notification
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
     * Set expediteur
     *
     * @param \AppBundle\Entity\User $expediteur
     *
     * @return Notification
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
}
