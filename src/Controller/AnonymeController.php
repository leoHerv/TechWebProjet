<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserSignInType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;

class AnonymeController extends AbstractController
{
    #[Route('/', name: 'anonyme_accueil')]
    public function accueilAction(): Response
    {
        return $this->render('MainTemplate/Anonyme/accueil.html.twig');
    }

    // Gestion du login et logout par le SecurityController

    #[Route('/signIn', name: 'anonyme_signIn')]
    public function signInAction(EntityManagerInterface $em , Request $request , UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();

        $user->setRoles(['ROLE_USER']);
        $user->setStatus(false);

        $form = $this->createForm(UserSignInType::class, $user);
        $form->add('send', SubmitType::class, ['label' => 'create New User']);
        $form->handleRequest($request);


        if($form->isSubmitted() && $form->isValid())
        {
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
            $em->persist($user);
            $em->flush();
        }


        $args = array(
            'userSignIn' => $form->createView(),
        );

        return $this->render('MainTemplate/Anonyme/signIn.html.twig',$args);
    }

    public function menuAction(): Response
    {
        $user = $this->getUser();
        if($user != null)
        {
            $isAdmin = $user->getStatus();
            $isAuth = ($user->getRoles() != 'ROLE_NOROLE');
            $isSuper = ($user->getRoles() == 'ROLE_SUPER_ADMIN');
            if($isSuper)
            {
                $isAdmin = false;
            }
        }
        else
        {
            $isAdmin = false;
            $isAuth = false;
            $isSuper = false;
        }


        $args = array(
            'isAuth' => $isAuth,
            'isAdmin' => $isAdmin,
            'isSuperAdmin' => $isSuper
        );
        return $this->render('Layouts/menu.html.twig', $args);
    }

}
