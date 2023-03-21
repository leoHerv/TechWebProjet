<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AdminController extends AbstractController
{
    #[Route('/addProduct', name: 'admin_addProduct')]
    public function addProductAction(): Response
    {
        return $this->render('MainTemplate/Admin/addProduct.html.twig');
    }
}
