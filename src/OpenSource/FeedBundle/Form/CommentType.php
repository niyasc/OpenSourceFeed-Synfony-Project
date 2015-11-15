<?php

namespace OpenSource\FeedBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class CommentType extends AbstractType
{
  /**
  * @param FormBuilderInterface $builder
  * @param array $options
  */
  public function buildForm(FormBuilderInterface $builder, array $options)
  {
    $builder
    ->add('name')
    ->add('reference')
    ->add('date', 'date', array(
      'html5' => TRUE,
      'widget' => 'single_text',
      'read_only' => TRUE
    ))
    ->add('message')
    ->add('post','entity', array(
      'class' => 'OpenSourceFeedBundle:Post',
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
      'data_class' => 'OpenSource\FeedBundle\Entity\Comment'
    ));
  }

  /**
  * @return string
  */
  public function getName()
  {
    return 'opensource_feedbundle_comment';
  }
}
