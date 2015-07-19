<?php

namespace Pronos\AuthBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;

class RegistrationFormType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        parent::buildForm($builder, $options);

        $builder->add('roles', 'collection', array(
            'type' => 'choice',
            'options' => array(
                'label' => false,
                'choices' => array(
                    'ROLE_USER' => 'Utilisateur',
                    'ROLE_MODERATEUR' => 'Moderateur',
                    'ROLE_ADMIN' => 'Admin'
                )
            )
        ));
        $builder->add('firstname');
        $builder->add('lastname');
    }

    public function getParent()
    {
        return 'fos_user_registration';
    }

    public function getName()
    {
        return 'pronos_user_registration';
    }
}