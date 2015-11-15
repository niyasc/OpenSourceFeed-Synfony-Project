<?php

namespace OpenSource\FeedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PostType extends AbstractType
{
  /**
  * @param FormBuilderInterface $builder
  * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('title')
    ->add('date', 'date', array(
      'html5' => TRUE,
      'widget' => 'single_text'
    ))
    ->add('preText')
    ->add('summary')
    ->add('link')
    ->add('category', 'entity', array(
      'class' => 'OpenSourceFeedBundle:Category',
      'required' => TRUE
    ))
    ;
  }

  /**
  * @param OptionsResolverInterface $resolver
  */
  public function setDefaultOptions(OptionsResolverInterface $resolver)
  {
    $resolver->setDefaults(array(
      'data_class' => 'OpenSource\FeedBundle\Entity\Post'
    ));
  }

  /**
  * @return string
  */
  public function getName()
  {
    return 'opensource_feedbundle_post';
  }
}
