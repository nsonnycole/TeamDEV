<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
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
                        'label' => 'Nom du projet',
    ))
    ->add('description', TextareaType::class, array(
                      'label' => 'Description',
    ))
    ->add('contenu', TextareaType::class, array(
                      'label' => 'Contenu',
    ))
      ->add('dateDebut', DateType::class, array(
                            'label' => 'Début du projet',
                            'format' => 'dd/MM/yyyy',
                             'html5' => false,
                            'attr' => array(
                                'class' => 'datepicker'
                            )

    ))
      ->add('dateFin', DateType::class, array(
                           'label' => 'Fin du projet',
                           'format' => 'dd/MM/yyyy',
                           'html5' => false,
                           'attr' => array(
                               'class' => 'datepicker'
                           )
    ))
      ->add('nbPlaces', NumberType::class, array(
                            'label' => 'Place disponible',
    ))
    ->add('statut', EntityType::class, array(
                            'class' => 'AppBundle:Statut',
                            'choice_label' => 'nom',
                            'label' => 'Statut du projet',
                            'empty_data'=> 'Selectionnez le statut du projet',
    ))

      ->add('idTypeProjet', EntityType::class, array(
                            'class' => 'AppBundle:TypeProjet',
                            'choice_label' => 'nom',
                            'label' => 'Type de projet',
                            'empty_data'=> 'Selectionnez le type du projet',
                            'multiple' => 'true',
                            'attr' => array(
                                'class' => 'chosen-select'
                            ),
      ))
      ->add('url', TextType::class, array(
                              'label' => 'URL du projet',
      ))
      ->add('file', FileType::class, array(
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
