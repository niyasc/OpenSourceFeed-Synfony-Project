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
    ->add('title', 'text', array(
      'attr' => array(
        'class' => 'form-control',
        'placeholder' => 'Post Title'
      )
    ))
    ->add('date', 'date', array(
      'html5' => TRUE,
      'widget' => 'single_text',
      'attr' => array(
        'class' => 'hidden'
      ),
      'label_attr' => array(
        'class' => 'hidden'
      )
    ))
    ->add('preText', 'textarea', array(
      'attr' => array(
        'placeholder' => 'Introductory Message (If Any)',
        'class' => 'form-control'
      )
    ))
    ->add('summary', 'textarea', array(
      'attr' => array(
        'placeholder' => 'Feed Summary',
        'class' => 'form-control'
      )
    ))
    ->add('postText', 'textarea', array(
      'attr' => array(
        'placeholder' => 'Conclusion',
        'class' => 'form-control'
      )
    ))
    ->add('link', 'text', array(
      'attr' => array(
        'placeholder' => 'Reference Link',
        'class' => 'form-control'
      )
    ))
    ->add('category', 'entity', array(
      'class' => 'OpenSourceFeedBundle:Category',
      'required' => TRUE,
      'attr' => array(
        'class' => 'form-control dropdown-toggle'
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
