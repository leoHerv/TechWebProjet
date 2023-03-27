<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\Extension\Core\Type\HiddenType;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UserSignInType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('login',
                TextType::class,
                [

                    'label' => 'login',
                    'attr' => ['placeholder' => 'login'],
                ]
            )
            ->add('password')


            ->add('name',
            TextType::class,
            [
                'label' => 'name',
                'attr' => ['placeholder'=> 'name'],
            ]
            )

            ->add('firstName',
            TextType::class,
            [
                'label' => 'firstName',
                'attr' => ['placeholder'=> 'firstName'],
            ]
            )

            ->add('mail')

            ->add('birthDate')

        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
