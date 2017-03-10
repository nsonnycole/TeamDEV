<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;


/**
* Type de formulaire pour les projets.
*/
class ProjetType extends AbstractType
{
  /**
  * @inheritdoc
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('nomProjet', TextType::class, array(
      'label' => 'Nom du document',
    ))
    ->add('description', TextareaType::class, array(
      'label' => 'Description',
      ->add('dateDebut', DateType::class, array(
        'label' => 'Début',
      ->add('dateFin', DateType::class, array(
          'label' => 'Fin',
      ->add('nbPlaces', NumberType::class, array(
          'label' => 'Place disponible',
      ->add('idTypeProjet', TextType::class, array(
          'label' => 'Type de projet',
      ));
      }

    /**
    * @inheritdoc
    */
      public function getName()
    {
        return 'Projet';
    }

    /**
    * @inheritdoc
    */
      public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => FileType::class));
    }
}
