<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\RangeType;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;


/**
 * Type de formulaire pour les inscription aux projets.
 */
class CompetenceType extends AbstractType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('nom', TextType::class, array(
                'label' => 'Nom',
            ))
            ->add('pourcentage', RangeType::class, array(
                    'label' => 'Pourcentage',
                      'attr' => array(
                          'min' => 0,
                          'max' => 100,
                          'value' => 50,
                          'onchange'=> 'range.value=value'
                      )
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
        return 'Competence';
    }

    /**
     * @inheritdoc
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => FileType::class));
    }
}
