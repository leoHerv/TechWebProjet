<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\UserSignInType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class AnonymeController extends AbstractController
{
    #[Route('/', name: 'anonyme_accueil')]
    public function accueilAction(): Response
    {
        return $this->render('MainTemplate/Anonyme/accueil.html.twig');
    }

    /*
    #[Route('/logintemp', name: 'anonyme_login')]
    public function loginAction(): Response
    {
        return $this->render('MainTemplate/Anonyme/login.html.twig');
    }
    */
    #[Route('/signIn', name: 'anonyme_signIn')]
    public function signInAction(EntityManagerInterface $em , Request $request): Response
    {
        $user = new User();

        $user->setRoles(['ROLE_USER']);
        $user->setStatus(false);

        $form = $this->createForm(UserSignInType::class, $user);
        $form->add('send', SubmitType::class, ['label' => 'create New User']);
        $form->handleRequest($request);


        if($form->isSubmitted())
        {
            $em->persist($user);
            $em->flush();
        }


        $args = array(
            'userSignIn' => $form->createView(),
        );

        return $this->render('MainTemplate/Anonyme/signIn.html.twig',$args);
    }

    public function menuAction(): Response
    {
        $args = array(
            'isAuth' => false,
            'isAdmin' => false,
            'isSuperAdmin' => false
        );
        return $this->render('Layouts/menu.html.twig', $args);
    }

}
