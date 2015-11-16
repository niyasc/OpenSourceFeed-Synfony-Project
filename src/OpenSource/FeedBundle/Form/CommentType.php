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
    ->add('name', 'text', array(
      'required' => TRUE,
      'attr' => array(
        'class' => 'form-control',
        'style' => 'max-width: 100%',
        'id' => 'name'
      ),
      'label_attr' => array(
        'for' => 'name'
      )
    ))
    ->add('reference', 'text', array(
      'required' => TRUE,
      'label' => 'Website',
      'attr' => array(
        'class' => 'form-control',
        'style' => 'max-width: 100%',
        'id' => 'name'
      ),
      'label_attr' => array(
        'for' => 'name',
      )
    ))
    ->add('date', 'date', array(
      'html5' => TRUE,
      'widget' => 'single_text',
      'attr' => array(
        'hidden' => TRUE
      ),
      'label_attr' => array(
        'hidden' => TRUE
      )
    ))
    ->add('message', 'textarea', array(
      'required' => TRUE,
      'label' => 'Website',
      'attr' => array(
        'class' => 'form-control',
        'style' => 'max-width: 100%',
        'id' => 'name'
      ),
      'label_attr' => array(
        'for' => 'name',
      )
    ))
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
