<?php

namespace Pronos\PronosticsBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolverInterface;

class MatchType extends AbstractType
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
            ->add('dateMatch')
            ->add('championship')
            ->add('daytime')
            ->add('homeTeam')
            ->add('awayTeam')
        ;
    }
    
    /**
     * @param OptionsResolverInterface $resolver
     */
    public function setDefaultOptions(OptionsResolverInterface $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'Pronos\PronosticsBundle\Entity\Match'
        ));
    }

    /**
     * @return string
     */
    public function getName()
    {
        return 'pronos_pronosticsbundle_match';
    }
}
