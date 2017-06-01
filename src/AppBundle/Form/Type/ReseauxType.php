<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;
/**
 * Type de formulaire pour les types de profils.
 */
class ReseauxType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
      $builder

      ->add('idTypeReseau', EntityType::class, array(
                              'class' => 'AppBundle:TypeReseau',
                              'choice_label' => 'nom',
                              'label' => 'Type de réseau',
                              'placeholder'=> 'Selectionnez le statut du projet',
                            
      ))
      ->add('url', TextType::class, array(
              'label' => 'URL',
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
        return 'Reseau';
    }

    /**
     * @inheritdoc
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => FileType::class));
    }
}
