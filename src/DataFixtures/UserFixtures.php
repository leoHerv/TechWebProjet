<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;

class UserFixtures extends Fixture
{
    public function load(ObjectManager $em): void
    {
        // $product = new Product();
        // $manager->persist($product);
        function addUser($em ,$login , $roles , $password , $name , $first_name, $mail , $birthdate, $status)
        {
                $user = new User();
                $user
                    ->setLogin($login)
                    ->setPassword($password)
                    ->setRoles($roles)
                    ->setName($name)
                    ->setFirstName($first_name)
                    ->setBirthDate($birthdate)
                    ->setMail($mail)
                    ->setStatus($status);

                $em->persist($user);
        }

        //Sadmin
        $roles = ['ROLE_SUPER_ADMIN'];
        addUser($em,'sadmin',$roles,'nimdas','sadmin','nimdas','sadmin@nimdas','2023-10-18','false');

        //Gilles
        $roles = ['ROLE_ADMIN'];
        addUser($em,'gilles',$roles,'sellig','gilles','sellig','gilles@sellig','2023-03-23','true');

        //Rita
        $roles =['ROLE_USER'];
        addUser($em,'rita',$roles,'atir','rita','atir','rita@atir','2023-03-23','false');

        $em->flush();
    }
}
