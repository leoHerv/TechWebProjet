<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class UsersFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('login',
                TextType::class,
                [
                    'attr' => ['placeholder' => 'Login'],
                ])
            ->add('password',
                TextType::class,
                [
                    'attr' => ['placeholder' => 'Password'],
                ])
            ->add('name',
                TextType::class,
                [
                    'attr' => ['placeholder' => 'Last Name'],
                ])
            ->add('firstName',
                TextType::class,
                [
                    'attr' => ['placeholder' => 'First Name'],
                ])
            ->add('mail',
                TextType::class,
                [
                    'attr' => ['placeholder' => 'Mail'],
                ])
            ->add('birthDate',
                DateType::class,
                [
                    'widget' => 'choice',
                    'years' => range(1900, date("Y")),
                    'label' => 'Birth date:',
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => User::class,
        ]);
    }
}
