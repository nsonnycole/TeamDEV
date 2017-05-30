<?php
namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\TextareaType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Bridge\Doctrine\Form\Type\EntityType;

class RegistrationType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder->add('nom');
    $builder->add('prenom');
    $builder->add('dateNaiss', DateType::class, array(
      'label' => 'Date de naissance',
      'format' => 'dd/MM/yyyy',
      'widget' => 'single_text',
      'attr' => array(
        'class' => 'datepicker'
      )));

      $builder->add('adresse', TextType::class, array(
        'label_format' => 'Adresse',
      ));
      $builder->add('presentation', TextAreaType::class, array(
        'label_format' => 'Présentation (max 100 carac.)',
      ));
      $builder->add('avatar', EntityType::class, array(
        'class' => 'AppBundle:Avatar',
        'choice_label' => 'nom',
        'label' => 'Avatar',
        'expanded' => true,
        'multiple' => false,

      ));

    }

    public function getParent()
    {
      return 'FOS\UserBundle\Form\Type\RegistrationFormType';

      // Or for Symfony < 2.8
      // return 'fos_user_registration';
    }

    public function getBlockPrefix()
    {
      return 'app_user_registration';
    }

    // For Symfony 2.x
    public function getName()
    {
      return $this->getBlockPrefix();
    }
  }
