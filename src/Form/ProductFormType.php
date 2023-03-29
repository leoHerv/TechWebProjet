<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;

class ProductFormType extends AbstractType
{
    public function buildForm(FormBuilderInterface $builder, array $options): void
    {
        $builder
            ->add('Nom',
                TextType::class,
                [
                    'attr' => ['placeholder' => 'Name']
                ])
            ->add('prix',
                IntegerType::class,
                [
                    'attr' => ['placeholder' => 'Price']
                ])

            ->add('categorie',
                ChoiceType::class,
                [
                    'choices' => [
                                  'Other' => 'other',
                                  'Citrus' => 'citrus',
                                  'RedFruits' => 'redFruits',
                                  'Exotic' => 'exotic',
                        ],
                ])

            ->add('quantity',
                IntegerType::class,
                [
                    'attr' => ['placeholder' => 'Quantity']
                ])
            //->add('img')
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
