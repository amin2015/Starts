<?php

namespace Quiz\QzBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class ResponseType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('callId', 'entity', array(
                  'class' => 'QuizQzBundle:Caller',
                  'property' => 'id',
                  'attr'=> array('class' => 'form-control')))
            ->add('content','textarea',array('attr'=> array('class' => 'form-control')))
            ->add('attachement_file', null, array('label' => 'Upload a file (.wav)'))
            ->add('questionId', 'entity', array(
                  'class' => 'QuizQzBundle:Question',
                  'property' => 'id',
                  'attr'=> array('class' => 'form-control')))
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Quiz\QzBundle\Entity\Response'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'quiz_qzbundle_response';
    }
}
