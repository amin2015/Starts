<?php

namespace Quiz\QzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class QuestionType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('questionnaireId', 'entity', array(
                  'label' => 'Questionnaire',
                  'class' => 'QuizQzBundle:Questionnaire',
                  'property' => 'name',
                  'attr'=> array('class' => 'form-control')))

            ->add('responseType', 'choice', array(
                  'label' => 'Response type',
                  'choices' => array(1 => 'File(wav)', 0 => 'Text'),
                  'expanded' => true,
                  'multiple' => false,
                  'preferred_choices' => array(0)))
            ->add('questionText','textarea', array(
                  'label' => 'Question Text',
                  'required' => false,
                  'attr'=> array('class' => 'form-control')))
            ->add('questionTextEn', 'textarea', array('label' => 'Question Text (EN)','required' => false,'attr'=> array('class' => 'form-control'))) 
            ->add('attachement_file', null, array('label' => 'Attachement','label' => 'Upload a file (.wav)'))
            ->add('position','text', array('label' => 'Position','attr'=> array('class' => 'form-control')))
            ->add('mode','text', array('label' => 'Mode','attr'=> array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quiz\QzBundle\Entity\Question'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quiz_qzbundle_question';
    }
}
