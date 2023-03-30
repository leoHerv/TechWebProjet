<?php

namespace App\DataFixtures;

use App\Entity\Bag;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class BagFixtures extends Fixture
{

    public function load(ObjectManager $em): void
    {
        function addBag($em,$quantity,$price)
        {
            $bag = new Bag();
            $bag
                ->setQuantity($quantity)
                ->setPrice($price);

            $em->persist($bag);
        }

        addBag($em,0,0);

        addBag($em,0,0);

        $em->flush();
    }
}
