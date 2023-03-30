<?php

namespace App\Controller;

use App\Entity\Bag;
use App\Form\EditProfilFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/edit', name: 'user_edit')]
    public function editAction(EntityManagerInterface $em, Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $user = $this->getUser();

        $form = $this->createForm(EditProfilFormType::class, $user);
        $form->add('send',SubmitType::class, ['label'=> 'Edit Profile']);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $user->setPassword($passwordHasher->hashPassword($user, $user->getPassword()));
            $em->persist($user);
            $em->flush();

            $this->addFlash('info', 'Modification réussite !');
            return $this->render('MainTemplate/Anonyme/Accueil.html.twig');
        }
        $args = array(
            'form' => $form->createView(),
        );
        return $this->render('MainTemplate/User/editProfil.html.twig',$args);
    }

    #[Route('/panier', name: 'user_panier')]
    public function panierAction(EntityManagerInterface $em): Response
    {
        $user = $this->getUser();

        $bag = $user->getBag();
        if ($bag == null)
        {
            $bag = new Bag();
            $bag
                ->setQuantity(0)
                ->setPrice(0);
            $em->persist($bag);

            $user->setBag($bag);
        }

        $args = array(
            'panier' => $bag
        );

        return $this->render('MainTemplate/User/panier.html.twig',$args);
    }

}
