<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/product', name: 'product')]
class ProductController extends AbstractController
{
    #[Route('/' , name: '_index')]
    public function indexAction() : Response
    {
        return $this->render('MainTemplate/User/listProduct.html.twig');
    }

    #[Route('/citrus', name: '_citrus')]
    public function agrumesAction(): Response
    {
        return $this->render('MainTemplate/Product/citrus.html.twig');
    }

    #[Route('/exotic', name: '_exotic')]
    public function exoticAction(): Response
    {
        return $this->render('MainTemplate/Product/exotic.html.twig');
    }

    #[Route('/redFruits', name: '_redFruits')]
    public function redFruitsAction(): Response
    {
        return $this->render('MainTemplate/Product/redFruits.html.twig');
    }

    #[Route('/others', name: '_others')]
    public function autresAction(): Response
    {
        return $this->render('MainTemplate/Product/others.html.twig');
    }




}
