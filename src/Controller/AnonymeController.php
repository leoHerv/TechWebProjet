<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnonymeController extends AbstractController
{
    #[Route('/', name: 'anonyme_accueil')]
    public function accueilAction(): Response
    {
        return $this->render('MainTemplate/Anonyme/accueil.html.twig');
    }

    #[Route('/login', name: 'anonyme_login')]
    public function loginAction(): Response
    {
        return $this->render('MainTemplate/Anonyme/login.html.twig');
    }

    #[Route('/signIn', name: 'anonyme_signIn')]
    public function signInAction(): Response
    {
        return $this->render('MainTemplate/Anonyme/signIn.html.twig');
    }

    public function menuAction(): Response
    {
        $args = array(
            'isAuth' => false,
            'isAdmin' => false,
            'isSuperAdmin' => false
        );
        return $this->render('Layouts/menu.html.twig', $args);
    }

}
