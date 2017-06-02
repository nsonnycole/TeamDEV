<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\Form\Extension\Core\Type\CollectionType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
use Vich\UploaderBundle\Form\Type\VichFileType;
use AppBundle\Form\Type\ImageFormType;
/**
* Type de formulaire pour les projets.
*/
class RechercheProjetType extends AbstractType
{
  /**
  * @inheritdoc
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
  $builder
  ->add('texte', TextType::class, array(
                      'label' => 'Recherche',
  ))
  ->add('save', SubmitType::class, array(
                          'label' => 'Rechercher',

                          'attr' => array(
                          'class' => 'btn btn-info pull-right',
                          'empty_value'=> 'Rechercher par titre',

    )));
  }

}
