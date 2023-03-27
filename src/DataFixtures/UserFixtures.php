<?php

namespace App\DataFixtures;

use App\Entity\User;
use Doctrine\Bundle\FixturesBundle\Fixture;
use Doctrine\Persistence\ObjectManager;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class UserFixtures extends Fixture
{
    private ?UserPasswordHasherInterface $passwordHasher = null;

    public function __construct(UserPasswordHasherInterface $passwordHasher)
    {
        $this->passwordHasher = $passwordHasher;
    }
    function addUser($em ,$login , $roles , $password , $name , $first_name, $mail , $birthdate, $status)
    {
        $user = new User();
        $hashedPassword = $this->passwordHasher->hashPassword($user, $password);
        $user
            ->setLogin($login)
            ->setPassword($hashedPassword)
            ->setRoles($roles)
            ->setName($name)
            ->setFirstName($first_name)
            ->setBirthDate($birthdate)
            ->setMail($mail)
            ->setStatus($status);

        $em->persist($user);
    }
    public function load(ObjectManager $em): void
    {


        //Sadmin
        $roles = ['ROLE_SUPER_ADMIN'];
        $this->addUser($em,'sadmin',$roles,'nimdas','sadmin','nimdas','sadmin@nimdas','2023-10-18','false');

        //Gilles
        $roles = ['ROLE_ADMIN'];
        $this->addUser($em,'gilles',$roles,'sellig','gilles','sellig','gilles@sellig','2023-03-23','true');

        //Rita
        $roles =['ROLE_USER'];
        $this->addUser($em,'rita',$roles,'atir','rita','atir','rita@atir','2023-03-23','false');

        //simon
        //$roles = ['ROLE_USER'];
        $this->addUser($em,'simon',$roles,'nomis','simon','nomis','simon@nomis','2023-03-23','false');

        $em->flush();
    }
}
