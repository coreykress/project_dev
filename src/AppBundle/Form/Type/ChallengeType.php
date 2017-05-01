<?php

namespace AppBundle\Form\Type;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ChallengeType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder->add('title');
        $builder->add('link');
        $builder->add('endsAt');
        $builder->add('tags');
    }

    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults ([
            'data_class'  =>  'AppBundle\Entity\User',
            'csrf_protection'  =>  false,
        ]);
    }
}