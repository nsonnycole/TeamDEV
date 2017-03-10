<?php
namespace AppBundle\Entity;

use FOS\UserBundle\Model\User as BaseUser;
use Doctrine\ORM\Mapping as ORM;

/**
 * @ORM\Entity
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
    private  $idTypeProfil;

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
}
