<?php

namespace Pronos\PronosticsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class PronosType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('scoreHomeTeam')
            ->add('scoreAwayTeam')
            ->add('user')
            ->add('match')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pronos\PronosticsBundle\Entity\Pronos'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pronos_pronosticsbundle_pronos';
    }
}
