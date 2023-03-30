<?php

namespace App\Controller;

use App\Entity\Produit;
use Doctrine\ORM\EntityManagerInterface;
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
    public function citrusAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em,"citrus");
    }

    #[Route('/exotic', name: '_exotic')]
    public function exoticAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em,"exotic");
    }

    #[Route('/redFruits', name: '_redFruits')]
    public function redFruitsAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em,"redFruits");
    }

    #[Route('/others', name: '_others')]
    public function othersAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em,"other");
    }

    public function afficheProductAction(EntityManagerInterface $em , string $string ) : Response
    {
        $productRep = $em->getRepository(Produit::class);
        $products = $productRep->findBy(array('categorie'=>$string));

        $args =  array(
            'categorie'=>$string,
            'products'=>$products
        );

        return $this->render('MainTemplate/Product/afficheProducts.html.twig',$args);
    }


}
