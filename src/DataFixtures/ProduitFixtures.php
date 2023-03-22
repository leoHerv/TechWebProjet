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
        addProduct($em, 'Apple', 1.22, '', 100, null);
        // Poire
        addProduct($em, 'Pear', 3.2, '', 120, null);
        // Orange
        addProduct($em, 'Orange', 0.75, '', 400, null);
        // Pastèque
        addProduct($em, 'Watermelon', 4.99, '', 40, null);
        // Fraise
        addProduct($em, 'Strawberry', 0.1472, '', 650, null);
        // Cerise
        addProduct($em, 'Cherry', 0.245, '', 1200, null);
        // Nectarine
        addProduct($em, 'Nectarine', 0.45, '', 460, null);
        // Raisin
        addProduct($em, 'Grape', 0.875, '', 85, null);
        // Mangue
        addProduct($em, 'Mango', 2.872, '', 70, null);
        // Myrtille
        addProduct($em, 'Blueberry', 0.03374, '', 1550, null);
        // Prune
        addProduct($em, 'Plum', 0.1494, '', 630, null);
        // Banane
        addProduct($em, 'Banana', 0.12, '', 405, null);
        // Framboise
        addProduct($em, 'Raspberry', 0.0544, '', 940, null);
        // Kiwi
        addProduct($em, 'Kiwi', 0.196, '', 640, null);
        // Ananas
        addProduct($em, 'Pineapple', 3.72, '', 85, null);
        // Citron
        addProduct($em, 'Lemon', 0.12, '', 240, null);
        // Abricot
        addProduct($em, 'Apricot', 0.0855, '', 585, null);
        // Noix de coco
        addProduct($em, 'Coconut', 1.19, '', 130, null);
        // Peche
        addProduct($em, 'Peach', 0.5985, '', 610, null);

        $em->flush();
    }
}
