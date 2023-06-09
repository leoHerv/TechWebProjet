<?php

namespace App\Controller;

use App\Entity\User;
use App\Entity\Produit;
use App\Form\ProductFormType;
use App\Service\ImgService;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\String\Slugger\SluggerInterface;

class AdminController extends AbstractController
{
    #[Route('/addProduct', name: 'admin_addProduct')]
    public function addProductAction(EntityManagerInterface $em , Request $request, SluggerInterface $slugger,
    ImgService $imgService): Response
    {
        $product = new Produit();

        $form = $this->createForm(ProductFormType::class , $product);
        $form->add('send',SubmitType::class, ['label'=> 'Create Product']);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $imgFile = $form->get('img')->getData();

            // this condition is needed because the 'brochure' field is not required
            // so the PDF file must be processed only when a file is uploaded
            if ($imgFile)
            {
                $ImgFileName = $imgService->upload($imgFile);
                $product->setImg($ImgFileName);
            }
            $em->persist($product);
            $em->flush();

            $this->addFlash('info', 'Le produit a bien été crée !');
            return $this->render('MainTemplate/Anonyme/Accueil.html.twig');
        }

        $args = array(
            'form' => $form->createView(),
        );

        return $this->render('MainTemplate/Admin/addProduct.html.twig',$args);
    }

    #[Route('/editUsers', name: 'super_admin_editUsers')]
    public function editUsersAction(EntityManagerInterface $em): Response
    {
        $userRepository = $em->getRepository(User::class);
        $users = $userRepository->findAll();
        $args = array(
            'users' => $users,
            'currentUser' => $this->getUser()
        );

        return $this->render('MainTemplate/Admin/editUsers.html.twig', $args);
    }

    #[Route(
        '/suppUser/{idUser}',
        name: 'admin_suppUser',
        requirements: ['idUser' => '[1-9]\d*'])]
    public function suppUserAction(int $idUser, EntityManagerInterface $em): Response
    {
        $currentUser = $this->getUser();

        $userRepository = $em->getRepository(User::class);
        $userToSupp = $userRepository->find($idUser);
        if(!empty($userToSupp))
        {
            $roles = $userToSupp->getRoles();

            if(!(in_array('ROLE_SUPER_ADMIN', $roles) || $currentUser == $userToSupp))
            {
                // TODO faire la supression du panier

                $em->remove($userToSupp);
                $em->flush();
                $this->addFlash('info', 'The user is remove.');
            }
            else
            {
                $this->addFlash('info', 'You cannot remove this user.');
            }
        }
        else
        {
            $this->addFlash('info', 'The user does not exist.');
        }

        return $this->redirectToRoute('super_admin_editUsers');
    }

    public function stringDateAction($date): Response
    {
        $res = date_format($date, "d/m/Y");

        $args = array(
          'string' => $res
        );

        return $this->render('Layouts/printString.html.twig', $args);
    }
}
