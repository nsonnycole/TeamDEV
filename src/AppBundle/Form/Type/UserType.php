<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use FOS\UserBundle\Form\Type\RegistrationFormType as BaseType;

/**
 * Type de formulaire pour les utilisateur.
 */
class UserType extends BaseType
{
    /**
     * @inheritdoc
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder
        
        ->add('statut', EntityType::class, array(
                                'class' => 'AppBundle:Avatar',
                                'choice_label' => 'url',
                                'label' => 'Avatar',
                                'placeholder'=> 'Selectionnez votre avatar',

            ));
    }

    /**
     * @inheritdoc
     */
    public function getName()
    {
        return 'User';
    }

    /**
     * @inheritdoc
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array('data_class' => FileType::class));
    }
}
