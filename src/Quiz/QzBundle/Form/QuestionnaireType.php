<?php

namespace Quiz\QzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;
use Quiz\QzBundle\Form\DataTransformer\LanguageToIntTransformer;

class QuestionnaireType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        
        
        $builder
            ->add('languageId', 'entity', array(
                  'label' => 'Language',
                  'class' => 'QuizQzBundle:Language',
                  'property' => 'name',
                  'attr'=> array('class' => 'form-control')))
            ->add('name','text', array('label' => 'Name','attr'=> array('class' => 'form-control')))
            ->add('attachement','text', array('label' => 'Attachement','required'=>false,'attr'=> array('class' => 'form-control')))    
            ->add('type','text', array('label' => 'Type','attr'=> array('class' => 'form-control')))
            ->add('description','textarea', array('label' => 'Description','required'=>false,'attr'=> array('class' => 'form-control')))
            ->add('welcomeMessage','textarea', array('label' => 'Welcome message','required'=>false,'attr'=> array('class' => 'form-control')))
            ->add('confirmationSms','textarea', array('label' => 'Confirmation SMS','attr'=> array('class' => 'form-control')))
            ->add('finalMessage','textarea', array('label' => 'Final Message','attr'=> array('class' => 'form-control')))
            ->add('isGenerated','checkbox', array('label' => 'Is Generated','required' => false))    
            
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quiz\QzBundle\Entity\Questionnaire'
        ));
        $resolver->setRequired(array(
            'em',
        ));

        $resolver->setAllowedTypes(array(
            'em' => 'Doctrine\Common\Persistence\ObjectManager',
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quiz_qzbundle_questionnaire';
    }
}
