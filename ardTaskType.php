<?php

namespace SEPConseil\ArduousnessBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ardTaskType extends AbstractType
{
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
      ->add('libelleTask', 'text')
      ->add('', '')
    ;
  }

  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'SEPConseil\ArduousnessBundle\Entity\ardTask'
    ));
  }

  public function getName()
  {
    return '';
  }
}