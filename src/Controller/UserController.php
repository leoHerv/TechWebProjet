<?php

namespace App\Controller;


use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/edit', name: 'user_edit')]
    public function editAction(): Response
    {
        return $this->render('MainTemplate/User/editProfil.html.twig');
    }

    #[Route('/panier', name: 'user_panier')]
    public function panierAction(): Response
    {
        return $this->render('MainTemplate/User/panier.html.twig');
    }

    #[Route('/listProduct', name: 'user_listProduct')]
    public function listProductAction(): Response
    {
        return $this->render('MainTemplate/User/listProduct.html.twig');
    }
}
