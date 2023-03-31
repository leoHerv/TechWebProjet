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
        return $this->afficheProductAction($em,"citrus", "Citrus Fruits");
    }

    #[Route('/exotic', name: '_exotic')]
    public function exoticAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em,"exotic", "Exotic Fruits");
    }

    #[Route('/redFruits', name: '_redFruits')]
    public function redFruitsAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em,"redFruits", "Red Fruits");
    }

    #[Route('/others', name: '_others')]
    public function othersAction(EntityManagerInterface $em): Response
    {
        return $this->afficheProductAction($em,"other", "Others Fruits");
    }

    public function afficheProductAction(EntityManagerInterface $em , string $string, string $name) : Response
    {

        $user = $this->getUser();
        $bag =$user->getBag();

        $productRep = $em->getRepository(Produit::class);
        $products = $productRep->findBy(array('categorie'=> $string));

        $lineproducts = $em->getRepository(LineProduct::class);
        $lineproduct = $lineproducts->findBy(['id_bag'=>$bag]);

        $args =  array(
            'categorie' => $name,
            'products' => $products,
            'lineproduct' =>$lineproducts
        );

        return $this->render('MainTemplate/Product/printProducts.html.twig',$args);
    }


    #[Route(
        '/addProductInBag/{idProduct}',
        name: '_addProductInBag',
        requirements: ['idProduct' => '[1-9]\d*'])]
    public function addProductInBagAction(int $idProduct, Request $request, EntityManagerInterface $em): Response
    {
        $currentUser = $this->getUser();

        $productRepository = $em->getRepository(Produit::class);

        $product_to_add = $productRepository->find($idProduct);

        $quantity = $request->query->get('quantity');
        $quantity_to_remove = $request->query->get('quantity_to_remove');




        if($quantity == 0)
        {
            return $this->redirectToRoute('product_index');
        }

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

                $lineproducts = $em->getRepository(LineProduct::class);
                $lineproduct = $lineproducts->findBy(['id_bag'=>$bag , 'id_products_id'=>$product_to_add]);
                if(!empty($lineproduct))
                {
                    if($quantity_to_remove == $lineproduct->getQuantity())
                    {
                        $product_to_add->setQuantity($product_to_add->getQuantity()+$quantity_to_remove);
                        $em->remove($lineproduct);
                    }
                    else
                    {
                        if($quantity_to_remove < $lineproduct->getQuantity())
                        {
                            $product_to_add->setQuantity($product_to_add->getQuantity()+$quantity_to_remove);
                        }
                        else
                        {
                            return $this->redirectToRoute('user_panier');
                        }

                    }
                }

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

        /*if($quantity > $product_to_rem->getQuantity() || $quantity < 0)
        {
            return $this->redirectToRoute('user_panier');
        }
    */
        if(!empty($product_to_rem)) {

            /*if ($quantity != $product_to_rem->getQuantity()) {
                $product_to_rem->setQuantity($product_to_rem->getQuantity() - $quantity);
                $product_to_rem->setPrice($product_to_rem->getQuantity() * $product->getPrix());
            }
            else
            {*/
            $bag->setQuantity($bag->getQuantity()-1);
            $em->remove($product_to_rem);
            /*}*/

            $product->setQuantity($product->getQuantity() + $quantity);
            $bag->setPrice($bag->getPrice() - ($product->getPrix() * $quantity));
            $em->flush();
        }

        return $this->redirectToRoute('user_panier');

    }



}
