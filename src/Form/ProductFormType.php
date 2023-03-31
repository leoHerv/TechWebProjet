<?php

namespace App\Form;

use App\Entity\Produit;
use Symfony\Component\Form\AbstractType;
use Symfony\Component\Form\Extension\Core\Type\ChoiceType;
use Symfony\Component\Form\Extension\Core\Type\FileType;
use Symfony\Component\Form\Extension\Core\Type\IntegerType;
use Symfony\Component\Form\Extension\Core\Type\NumberType;
use Symfony\Component\Form\Extension\Core\Type\TextType;
use Symfony\Component\Form\FormBuilderInterface;
use Symfony\Component\OptionsResolver\OptionsResolver;
use Symfony\Component\Validator\Constraints\File;

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
                NumberType::class,
                [
                    'attr' => ['placeholder' => 'Price']
                ])
            ->add('quantity',
        IntegerType::class,
                [
                    'attr' => ['placeholder' => 'Quantity']
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
            ->add('img',
                FileType::class, [
                    'label' => 'Brochure (PDF file)',

                    // unmapped means that this field is not associated to any entity property
                    'mapped' => false,

                    // make it optional so you don't have to re-upload the PDF file
                    // every time you edit the Product details
                    'required' => false,

                    // unmapped fields can't define their validation using annotations
                    // in the associated entity, so you can use the PHP constraint classes
                    'constraints' => [
                        new File([
                            'maxSize' => '1024k',
                            'mimeTypes' => [
                                'image/jpeg',
                                'image/png',
                            ],
                            'mimeTypesMessage' => 'Please upload a valid PDF document',
                        ])
                    ],
                ])
        ;
    }

    public function configureOptions(OptionsResolver $resolver): void
    {
        $resolver->setDefaults([
            'data_class' => Produit::class,
        ]);
    }
}
