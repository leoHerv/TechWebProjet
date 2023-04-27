<?php

namespace App\DataFixtures;

use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class ProduitFixtures extends Fixture
{
    public function load(ObjectManager $em): void
    {
        function addProduct($em, $nom, $prix, $categorie, $quantity, $img)
        {
            $product = new Produit();
            $product
                ->setNom($nom)
                ->setPrix($prix)
                ->setCategorie($categorie)
                ->setQuantity($quantity)
                ->setImg($img);

            $em->persist($product);
        }
        // Pomme
        addProduct($em, 'Apple', 1.22, 'other', 100, 'Apple.png');
        // Poire
        addProduct($em, 'Pear', 3.2, 'other', 120, 'Pear.png');
        // Orange
        addProduct($em, 'Orange', 0.75, 'citrus', 400, 'Orange.png');
        // Pastèque
        addProduct($em, 'Watermelon', 4.99, 'other', 40, 'Watermelon.png');
        // Fraise
        addProduct($em, 'Strawberry', 0.1472, 'redFruits', 650, 'Strawberry.png');
        // Cerise
        addProduct($em, 'Cherry', 0.245, 'redFruits', 1200, 'Cherry.png');
        // Nectarine
        addProduct($em, 'Nectarine', 0.45, 'other', 460, 'Nectarine.png');
        // Raisin
        addProduct($em, 'Grape', 0.875, 'other', 85, 'Grape.png');
        // Mangue
        addProduct($em, 'Mango', 2.872, 'exotic', 70, 'Mango.png');
        // Myrtille
        addProduct($em, 'Blueberry', 0.03374, 'redFruits', 1550, 'Blueberry.png');
        // Prune
        addProduct($em, 'Plum', 0.1494, 'other', 630, 'Plum.png');
        // Banane
        addProduct($em, 'Banana', 0.12, 'other', 405, 'Banana.png');
        // Framboise
        addProduct($em, 'Raspberry', 0.0544, 'redFruits', 940, 'Raspberry.png');
        // Kiwi
        addProduct($em, 'Kiwi', 0.196, 'other', 640, 'Kiwi.png');
        // Ananas
        addProduct($em, 'Pineapple', 3.72, 'exotic', 85, 'Pineapple.png');
        // Citron
        addProduct($em, 'Lemon', 0.12, 'citrus', 240, 'Lemon.png');
        // Abricot
        addProduct($em, 'Apricot', 0.0855, 'other', 585, 'Apricot.png');
        // Noix de coco
        addProduct($em, 'Coconut', 1.19, 'exotic', 130, 'Coconut.png');


        $em->flush();
    }
}
