<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('firstName');
        $builder->add('lastName');
        $builder->add('userName');
        $builder->add('email');
        $builder->add('password');
        $builder->add('salt');
        $builder->add('isAdmin');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults ([
            'data_class'  =>  'AppBundle\Entity\User',
            'csrf_protection'  =>  false,
        ]);
    }
}