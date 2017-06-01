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
                            'widget' => 'single_text',
                            'attr' => array(
                                'class' => 'datepicker'
                            )

    ))
      ->add('dateFin', DateType::class, array(
                           'label' => 'Fin du projet',
                           'format' => 'dd/MM/yyyy',
                           'widget' => 'single_text',
                           'attr' => array(
                               'class' => 'datepicker'
                           )
    ))
    ->add('nbPlaces', IntegerType::class, array(
                            'label' => 'Place disponible',
    ))
    ->add('statut', EntityType::class, array(
                            'class' => 'AppBundle:Statut',
                            'choice_label' => 'nom',
                            'label' => 'Statut du projet',
                            'placeholder'=> 'Selectionnez le statut du projet',
                            'expanded' => true,
                            'multiple' => false,
    ))

    ->add('idTypeProjet', EntityType::class, array(
                            'class' => 'AppBundle:TypeProjet',
                            'choice_label' => 'nom',
                            'label' => 'Type de projet',
                            'placeholder'=> 'Selectionnez le type du projet',
                            'multiple' => true,
                            'attr' => array(
                                'class' => 'chosen-select'
                            ),

    ))

       ->add('file', FileType::class, array(
           'label' => 'Image',
           'required'   => false,
           'data_class' => null,
       ))


      ->add('url', TextType::class, array(
                              'label' => 'URL du projet',
                              'required'   => false,
                              'attr' => array(
                                  'placeholder' => 'Ex: http://www.monSite.fr'
                              ),
      ))

      ->add('technologies', EntityType::class, array(
                            'class' => 'AppBundle:Technologie',
                            'choice_label' => 'nom',
                            'label' => 'Technologies',
                            'placeholder'=> 'Selectionnez les technologies',
                            'multiple' => true,
                            'attr' => array(
                                'class' => 'chosen-select'
                            ),

    ))

      ->add('save', SubmitType::class, array(
                              'label' => 'Enregistrer',
                              'attr' => array(
                              'class' => 'btn btn-success pull-left'
        )));
      }

      public function prePersist($image)
      {
          $this->manageFileUpload($image);
      }

      public function preUpdate($image)
      {
          $this->manageFileUpload($image);
      }

      private function manageFileUpload($image)
      {
          if ($image->getFile()) {
              $image->refreshUpdated();
          }
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
