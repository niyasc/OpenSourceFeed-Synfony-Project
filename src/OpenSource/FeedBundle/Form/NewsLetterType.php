<?php

namespace OpenSource\FeedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class NewsLetterType extends AbstractType
{
  /**
  * @param FormBuilderInterface $builder
  * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('name', 'text', array(
      'required' => TRUE,
      'attr' => array(
        'id' => 'name',
        'class' => 'form-control'
      ),
      'label_attr' => array(
        'for' => 'name'
      )
    ))
    ->add('link', 'text', array(
      'required' => TRUE,
      'attr' => array(
        'id' => 'link',
        'class' => 'form-control'
      ),
      'label_attr' => array(
        'for' => 'link'
      )
    ))
    ->add('submit', 'submit', array(
      'attr' => array(
        'class' => 'btn btn-primary btn-sm custom-btn'
      )
    ))
    ;
  }

  /**
  * @param OptionsResolverInterface $resolver
  */
  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'OpenSource\FeedBundle\Entity\NewsLetter'
    ));
  }

  /**
  * @return string
  */
  public function getName()
  {
    return 'opensource_feedbundle_newsletter';
  }
}
