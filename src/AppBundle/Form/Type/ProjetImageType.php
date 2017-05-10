<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;

/**
* Type de formulaire pour les projets.
*/
class ProjetImageType extends AbstractType
{
  /**
  * @inheritdoc
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('file', FileType::class, array(
                              'required'   => false,
                              'label' => 'Fichier à joindre',
      ))
      ->add('save', SubmitType::class, array(
                              'label' => 'Enregistrer',
                              'attr' => array(
                              'class' => 'btn btn-success pull-left'
        )));
      }

    /**
    * @inheritdoc
    */
      public function getName()
    {
        return 'ProjetImage';
    }

    /**
    * @inheritdoc
    */
      public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => FileType::class));
    }
}
