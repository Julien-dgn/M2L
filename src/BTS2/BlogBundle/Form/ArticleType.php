<?php

namespace BTS2\BlogBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ArticleType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('titre','text')
            ->add('auteur','text')
            ->add('date','date')
            ->add('texte','text')
            ->add('publier','checkbox')
            ->add('image',new ImageType())
            ->add('tags', 'entity',array(
                'class'=> 'BTS2BlogBundle:Tag',
                'property' => 'libelle',
                'multiple' => true
             ))
            ->add('save','submit')
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'BTS2\BlogBundle\Entity\Article'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'bts2_blogbundle_article';
    }
}
