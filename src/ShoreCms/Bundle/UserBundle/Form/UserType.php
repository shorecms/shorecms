<?php

namespace ShoreCms\Bundle\UserBundle\Form;

use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\RepeatedType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserType extends AbstractType
{
    /**
     * @param FormBuilderInterface $builder
     * @param array $options
     */
    public function buildForm(FormBuilderInterface $builder, array $options)
    {
        $builder
            ->add('name', null, [
                'attr' => [
                    'size' => 50
                ]
            ])
            ->add('email', null, [
                'attr' => [
                    'size' => 70
                ]
            ])
            ->add('password', RepeatedType::class, [
                'type'           => PasswordType::class,
                'first_options'  => [
                    'label' => 'Password',
                    'attr' => [
                        'size' => 40
                    ],
                ],
                'second_options' => [
                    'label' => 'Repeat password',
                    'attr' => [
                        'size' => 40
                    ],
                ],
            ])
        ;
    }
    
    /**
     * @param OptionsResolver $resolver
     */
    public function configureOptions(OptionsResolver $resolver)
    {
        $resolver->setDefaults(array(
            'data_class' => 'ShoreCms\Bundle\UserBundle\Entity\User'
        ));
    }
}
