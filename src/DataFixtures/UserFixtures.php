<?php

namespace App\DataFixtures;

use App\Entity\User;
use DateTime;
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
    function addUser($em ,$login , $roles , $password , $name , $first_name, $mail , $birthdate)
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
            ->setMail($mail);

        $em->persist($user);
    }
    public function load(ObjectManager $em): void
    {

        $date = new DateTime('now');
        $date = $date->format('Y-m-d');

        //Sadmin
        $roles = ['ROLE_SUPER_ADMIN'];
        $this->addUser($em,'sadmin',$roles,'nimdas','sadmin','nimdas','sadmin@nimdas',$date);

        //Gilles
        $roles = ['ROLE_ADMIN'];
        $this->addUser($em,'gilles',$roles,'sellig','gilles','sellig','gilles@sellig',$date);

        //Mazen
        $roles = ['ROLE_ADMIN'];
        $this->addUser($em,'Mazen',$roles,'nezam','AlNat','Mazen','mazen@mazen',$date);

        //Rita
        $roles =['ROLE_USER'];
        $this->addUser($em,'rita',$roles,'atir','rita','atir','rita@atir',$date);

        //simon
        //$roles = ['ROLE_USER'];
        $this->addUser($em,'simon',$roles,'nomis','simon','nomis','simon@nomis',$date);

        $em->flush();
    }
}
