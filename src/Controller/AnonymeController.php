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
    public function signInAction(EntityManagerInterface $em, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = new User();

        $user->setRoles(['ROLE_USER']);
        $user->setStatus(false);

        $form = $this->createForm(UserSignInType::class, $user);
        $form->add('send', SubmitType::class, ['label' => 'Sign In']);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
            $em->persist($user);
            $em->flush();
            return $this->render('MainTemplate/Anonyme/Accueil.html.twig');
        }

        $args = array(
            'form' => $form->createView(),
        );

        return $this->render('MainTemplate/Anonyme/signIn.html.twig',$args);
    }

    public function menuAction(): Response
    {
        $isAuth = false;
        $isAdmin = false;
        $isSuper = false;

        $user = $this->getUser();
        if($user != null)
        {
            $roles = $user->getRoles();

            $isAuth = (in_array('ROLE_NOROLE', $roles));
            $isAdmin = (in_array('ROLE_ADMIN', $roles));
            $isSuper = (in_array('ROLE_SUPER_ADMIN', $roles));
        }

        $args = array(
            'isAuth' => $isAuth,
            'isAdmin' => $isAdmin,
            'isSuperAdmin' => $isSuper
        );
        return $this->render('Layouts/menu.html.twig', $args);
    }

}
