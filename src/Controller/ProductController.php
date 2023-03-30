<?php

namespace App\Controller;

use App\Entity\LineProduct;
use App\Entity\Produit;
use App\Entity\Bag;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
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


    #[Route(
        '/addproductinbag/{idproduct}',
        name: '_addproductinbag',
        requirements: ['idproduct' => '[1-9]\d*'])]
    public function suppUserAction(int $idproduct,Request $request, EntityManagerInterface $em): Response
    {
        $currentUser = $this->getUser();

        $productRepository = $em->getRepository(Produit::class);

        $product_to_add = $productRepository->find($idproduct);

        $quantity = $request->query->get('quantity');

        if(!empty($product_to_add))
        {
            if($product_to_add->getQuantity() >= $quantity) {
                if ($currentUser->getBag() == null) {
                    $bag = new Bag();
                    $bag
                        ->setPrice(0)
                        ->setQuantity(0);

                    $em->persist($bag);

                    $currentUser->setBag($bag);
                }

                $newLineBag = new LineProduct();
                $newLineBag
                    ->setQuantity($quantity)
                    ->setIdBag($currentUser->getBag())
                    ->setIdProduits($product_to_add)
                    ->setPrice($product_to_add->getPrix() * (float)$quantity);

                $em->persist($newLineBag);

                $product_to_add->setQuantity($product_to_add->getQuantity() - $quantity);

                $currentUser->getBag()->setPrice($currentUser->getBag()->getPrice()+$newLineBag->getPrice());
                $currentUser->getBag()->setQuantity($currentUser->getBag()->getQuantity()+1);

                $em->flush();
                $this->addFlash('info', 'The product has been added to your Bag');
            }
            else
                {
                    $this->addFlash('info', 'Error Quantity');
                }
        }
        else
            {
                $this->addFlash('info', 'Sorry we do not have this Product');
            }

        return $this->redirectToRoute('user_panier');
    }

}
