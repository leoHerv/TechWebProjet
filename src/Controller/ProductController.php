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
        return $this->render('MainTemplate/Product/index.html.twig');
    }

    #[Route('/agrumes', name: '_agrumes')]
    public function agrumesAction(): Response
    {
        return $this->render('MainTemplate/Product/agrumes.html.twig');
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

    #[Route('/autres', name: '_autres')]
    public function autresAction(): Response
    {
        return $this->render('MainTemplate/Product/autres.html.twig');
    }




}
