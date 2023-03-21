<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnonymeController extends AbstractController
{
    #[Route('/', name: 'anonyme_acceuil')]
    public function accueilAction(): Response
    {
        return $this->render('Accueil/index.html.twig');
    }

    #[Route('/login', name: 'anonyme_login')]
    public function loginAction(): Response
    {
        return $this->render('Accueil/index.html.twig');
    }

    #[Route('/signIn', name: 'anonyme_signIn')]
    public function signInAction(): Response
    {
        return $this->render('Accueil/index.html.twig');
    }


}
