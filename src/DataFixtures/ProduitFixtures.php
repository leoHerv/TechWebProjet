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
        addProduct($em, 'Apple', 1.22, null, 100, null);
        // Poire
        addProduct($em, 'Pear', 3.2, null, 120, null);
        // Orange
        addProduct($em, 'Orange', 0.75, null, 400, null);
        // Pastèque
        addProduct($em, 'Watermelon', 4.99, null, 40, null);
        // Fraise
        addProduct($em, 'Strawberry', 0.1472, null, 650, null);
        // Cerise
        addProduct($em, 'Cherry', 0.245, null, 1200, null);
        // Nectarine
        addProduct($em, 'Nectarine', 0.45, null, 460, null);
        // Raisin
        addProduct($em, 'Grape', 0.875, null, 85, null);
        // Mangue
        addProduct($em, 'Mango', 2.872, null, 70, null);
        // Myrtille
        addProduct($em, 'Blueberry', 0.03374, null, 1550, null);
        // Prune
        addProduct($em, 'Plum', 0.1494, null, 630, null);
        // Banane
        addProduct($em, 'Banana', 0.12, null, 405, null);
        // Framboise
        addProduct($em, 'Raspberry', 0.0544, null, 940, null);
        // Kiwi
        addProduct($em, 'Kiwi', 0.196, null, 640, null);
        // Ananas
        addProduct($em, 'Pineapple', 3.72, null, 85, null);
        // Citron
        addProduct($em, 'Lemon', 0.12, null, 240, null);
        // Abricot
        addProduct($em, 'Apricot', 0.0855, null, 585, null);
        // Noix de coco
        addProduct($em, 'Coconut', 1.19, null, 130, null);
        // Peche
        addProduct($em, 'Peach', 0.5985, null, 610, null);

        $em->flush();
    }
}
