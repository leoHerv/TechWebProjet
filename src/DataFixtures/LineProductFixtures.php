<?php

namespace App\DataFixtures;

use App\Entity\LineProduct;
use App\Entity\Bag;
use App\Entity\Produit;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class LineProductFixtures extends Fixture
{
    public function load(ObjectManager $em): void
    {
        function addLineProduct($em ,$id_product,$id_bag,$price,$quantity)
        {
             $lineProduct = new LineProduct();
             $lineProduct
                ->setIdBag($id_bag)
                ->setIdProduits($id_product)
                ->setPrice($price)
                ->setQuantity($quantity);

            $em->persist($lineProduct);
        }

        $bag = new Bag();
        $bag
            ->setPrice(0)
            ->setQuantity(0);
        $em->persist($bag);


        $product = new Produit();
        $product
            ->setNom('Peach')
            ->setQuantity(610)
            ->setCategorie("other")
            ->setPrix(0.5985)
            ->setImg('Peach.png');
        $em->persist($product);

        $quantity = 3;
        $priceLine = $product->getPrix()*$quantity;

        addLineProduct($em,$product,$bag,$priceLine,$quantity);

        $bag->setPrice($bag->getPrice()+$priceLine);
        $product->setQuantity($product->getQuantity()-$quantity);




        $em->flush();
    }
}
