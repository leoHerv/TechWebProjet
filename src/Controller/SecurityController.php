<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Symfony\Component\Security\Http\Authentication\AuthenticationUtils;

class SecurityController extends AbstractController
{
    #[Route(path: '/login', name: 'security_login')]
    public function login(AuthenticationUtils $authenticationUtils): Response
    {

        // get the login error if there is one
        $error = $authenticationUtils->getLastAuthenticationError();
        // last username entered by the user
        $lastUsername = $authenticationUtils->getLastUsername();

        $args = array(
            'last_username' => $lastUsername,
            'error' => $error
        );

        return $this->render('MainTemplate/Security/login.html.twig', $args);
    }

    #[Route(path: '/logout', name: 'security_logout')]
    public function logout(): void
    {
        $this->addFlash('info', 'Déconnection reussite !');
        $this->redirectToRoute('accueil_anonyme');
    }
}
