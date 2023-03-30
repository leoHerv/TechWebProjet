<?php

namespace App\Form;

use App\Entity\User;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\DateType;
use Symfony\Component\Form\Extension\Core\Type\PasswordType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class EditProfilFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('login',
                TextType::class,
                [
                    'label' => 'Login:',
                    'attr' => ['placeholder' => 'Login']
                ])
            ->add('password',
                PasswordType::class,
                [
                    'label' => 'Password:',
                    'attr' => ['placeholder' => 'Password'],
                ])
            ->add('name',
                TextType::class,
                [
                    'label' => 'Last Name:',
                    'attr' => ['placeholder' => 'Last Name']
                ])
            ->add('firstName',
                TextType::class,
                [
                    'label' => 'First Name:',
                    'attr' => ['placeholder' => 'First Name']
                ])
            ->add('mail',
                TextType::class,
                [
                    'label' => 'Mail:',
                    'attr' => ['placeholder' => 'Mail']
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