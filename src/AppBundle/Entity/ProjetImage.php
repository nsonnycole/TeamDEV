<?
namespace AppBundle\Entity;
use Symfony\Component\Validator\Constraints as Assert;
use Doctrine\ORM\Mapping as ORM;
use Doctrine\Common\Collections\ArrayCollection;
use Symfony\Component\HttpFoundation\File\File;
use Vich\UploaderBundle\Mapping\Annotation as Vich;
//https://stackoverflow.com/questions/41117501/symfony-3-vichuploaderbundle-mapping-error
/**
 *
 * @ORM\Entity()
 * @ORM\Table(name="projet_image")
 * @Vich\Uploadable
 */
class ProjetImage
{
/**
 * @var int
 *
 * @ORM\Column(name="id", type="integer")
 * @ORM\Id
 * @ORM\GeneratedValue(strategy="AUTO")
 */
private $id;

/**
* NOTE: This is not a mapped field of entity metadata, just a simple property.
*
* @Vich\UploadableField(mapping="product_image", fileNameProperty="imageName")
*
* @var File
*/
private $imageFile;

/**
 * @var string
 *
 * @ORM\Column(name="image_name", type="string", length=255, nullable=true)
 */
private $imageName;

/**
 * @var \DateTime
 *
 * @ORM\Column(name="update_at", type="datetime")
 */
private $updateAt;

}

?>
