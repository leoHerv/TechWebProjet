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
    #[Route('/', name: '_index')]
    public function indexAction(): Response
    {
        return $this->render('MainTemplate/User/listProduct.html.twig');
    }

    #[Route('/citrus', name: '_citrus')]
    public function citrusAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em, "citrus", "Citrus Fruits");
    }

    #[Route('/exotic', name: '_exotic')]
    public function exoticAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em, "exotic", "Exotic Fruits");
    }

    #[Route('/redFruits', name: '_redFruits')]
    public function redFruitsAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em, "redFruits", "Red Fruits");
    }

    #[Route('/others', name: '_others')]
    public function othersAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em, "other", "Others Fruits");
    }

    public function afficheProductAction(EntityManagerInterface $em, string $string, string $name): Response
    {

        $user = $this->getUser();
        $bag = $user->getBag();

        $productRep = $em->getRepository(Produit::class);
        $products = $productRep->findBy(array('categorie' => $string));

        $lineproducts = null;

        if(!empty($bag)) {
            $lineproducts = $bag->getId_LineProducts();
        }
        $args = array(
            'categorie' => $name,
            'products' => $products,
            'lineproducts' => $lineproducts
        );

        return $this->render('MainTemplate/Product/printProducts.html.twig', $args);
    }


    #[Route(
        '/addProductInBag/{idProduct}',
        name: '_addProductInBag',
        requirements: ['idProduct' => '[1-9]\d*'])]
    public function addProductInBagAction(int $idProduct, Request $request, EntityManagerInterface $em): Response
    {
        $quantity_all = $request->query->get('quantity_all');
        if($quantity_all < 0)
        {
            $quantity = 0;
            $quantity_to_remove = $quantity_all * -1;
        }else
        {
            $quantity = $quantity_all;
            $quantity_to_remove = 0 ;
        }
        $currentUser = $this->getUser();

        $productRepository = $em->getRepository(Produit::class);

        $product_to_add = $productRepository->find($idProduct);




        if ($quantity_all ==0) {
            return $this->redirectToRoute('product_index');
        }

        //ajout produit
        if (!empty($product_to_add)) {
            if ($product_to_add->getQuantity() >= $quantity) {
                if ($currentUser->getBag() == null) {
                    $bag = new Bag();
                    $bag
                        ->setPrice(0)
                        ->setQuantity(0);

                    $em->persist($bag);

                    $currentUser->setBag($bag);
                }

                $bag = $currentUser->getBag();

                if(!($this->productInBag($product_to_add, $bag))) {
                    $newLineBag = new LineProduct();
                    $newLineBag
                        ->setQuantity($quantity)
                        ->setIdBag($currentUser->getBag())
                        ->setIdProduits($product_to_add)
                        ->setPrice($product_to_add->getPrix() * (float)$quantity);

                    $em->persist($newLineBag);
                    $currentUser->getBag()->setPrice($currentUser->getBag()->getPrice() + $newLineBag->getPrice());
                    $currentUser->getBag()->setQuantity($currentUser->getBag()->getQuantity() + 1);
                }
                else
                {
                    $lineproducts = $bag->getid_LineProducts();
                    foreach ($lineproducts as $lineproduct)
                    {
                        if ($lineproduct->getid_product() == $product_to_add)
                        {
                            $lineproduct->setQuantity($lineproduct->getQuantity() + $quantity);
                            $lineproduct->setPrice($product_to_add->getPrix() * $lineproduct->getQuantity());
                        }
                    }
                }
                $product_to_add->setQuantity($product_to_add->getQuantity() - $quantity);
                $lineproducts = $bag->getid_LineProducts();
                $bag = $currentUser->getBag();
                if (!empty($lineproducts) && $quantity_to_remove!=0)
                {
                    foreach ($lineproducts as $lineproduct)
                    {
                        if($lineproduct->getid_product()->getid() == $product_to_add->getid())
                        {
                            if($quantity_to_remove == $lineproduct->getQuantity())
                            {
                                $product_to_add->setQuantity($product_to_add->getQuantity() + $quantity_to_remove);
                                $bag->setPrice($bag->getPrice()-($product_to_add->getPrix()*$quantity_to_remove));
                                $bag->setQuantity($bag->getQuantity()-1);
                                $em->remove($lineproduct);
                            }
                            else
                            {
                                if ($quantity_to_remove < $lineproduct->getQuantity()) {
                                    $product_to_add->setQuantity($product_to_add->getQuantity() + $quantity_to_remove);
                                    $lineproduct->setQuantity($lineproduct->getQuantity() - $quantity_to_remove);
                                    $bag->setPrice($bag->getPrice()-($product_to_add->getPrix()*$quantity_to_remove));
                                }
                                else
                                {
                                    return $this->redirectToRoute('user_panier');
                                }
                            }
                        }
                    }

                }
                $em->flush();
            }
        }
        return $this->redirectToRoute('user_panier');
    }

    #[Route(
        '/removeProductFromBag/{idlineproduct}',
        name: '_removeProductFromBag',
        requirements: ['idProduct' => '[1-9]\d*'])]
    public function removeProductFromBagAction(int $idlineproduct, Request $request, EntityManagerInterface $em): Response
    {

        $currentUser = $this->getUser();

        $bag = $currentUser->getBag();

        $productRepository = $em->getRepository(Produit::class);

        $lineProductRepository = $em->getRepository(LineProduct::class);

        $product_to_rem = $lineProductRepository->find($idlineproduct);

        $product = $productRepository->find($product_to_rem->getid_product());

        $quantity = $product_to_rem->getQuantity();

        if (!empty($product_to_rem)) {

            $bag->setQuantity($bag->getQuantity() - 1);
            $em->remove($product_to_rem);


            $product->setQuantity($product->getQuantity() + $quantity);
            $bag->setPrice($bag->getPrice() - ($product->getPrix() * $quantity));
            $em->flush();
        }

        return $this->redirectToRoute('user_panier');

    }
    
    #[Route(
        '/removeBag/{idbag}',
        name: '_removeBag',
        requirements: ['idbag' => '[1-9]\d*'])]
    public function removeBagAction(int $idbag , EntityManagerInterface $em ) :Response
    {
        $user = $this->getUser();
        $bag = $user->getBag();
        if($bag->getid()!=$idbag || $bag->getQuantity()==0)
        {
            return $this->redirectToRoute('user_panier');
        }
        $lineproducts = $bag->getId_LineProducts();
        foreach ($lineproducts as $lineproduct)
            {
                $product = $lineproduct->getid_product();
                $product->setQuantity($product->getQuantity()+$lineproduct->getQuantity());
                $em->remove($lineproduct);
            }
        $bag->setPrice(0.0);
        $bag->setQuantity(0);
        $em->flush();
        $this->addFlash('info', 'Panier Supprimer!');
        return $this->redirectToroute('anonyme_accueil');
    }

    #[Route(
        '/orderBag/{idbag}',
        name: '_orderBag',
        requirements: ['idbag' => '[1-9]\d*'])]
    public function orderBagAction(int $idbag , EntityManagerInterface $em ) :Response
    {
        $user = $this->getUser();
        $bag = $user->getBag();
        if($bag->getid()!=$idbag || $bag->getQuantity()==0)
        {
            return $this->redirectToRoute('user_panier');
        }
        $lineproducts = $bag->getId_LineProducts();
        foreach ($lineproducts as $lineproduct)
        {
            $em->remove($lineproduct);
        }
        $bag->setPrice(0.0);
        $bag->setQuantity(0);
        $em->flush();
        $this->addFlash('info', 'Commande Effectuée!');
        return $this->redirectToroute('anonyme_accueil');
    }



    public function productInBag(Produit $product, Bag $bag): bool
    {
        if($bag->getQuantity()!=0) {
            $lineproducts = $bag->getid_LineProducts();
            foreach ($lineproducts as $lineproduct) {
                if ($lineproduct->getid_product()->getId() == $product->getId()) {
                    return true;
                } else {
                    return false;
                }
            }
        }
        return false;
    }



}
