<?php

namespace SEPConseil\ArduousnessBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ard_valueType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('valueString', 'text')
      ->add('valueInt', 'text')
      ->add('valueFloat', 'text')
      ->add('valueBoolean', 'text')
    ;
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'SEPConseil\ArduousnessBundle\Entity\ard_value'
    ));
  }

  public function getName()
  {
    return '';
  }
}