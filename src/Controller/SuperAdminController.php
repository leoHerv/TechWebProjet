<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminCreatorFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class SuperAdminController extends AbstractController
{
    #[Route('/addAdmin', name: 'super_admin_addAdmin')]
    public function addAdminAction(EntityManagerInterface $em , Request $request, UserPasswordHasherInterface $passwordHasher): Response
    {
        $admin = new User();
        $admin->setRoles(['ROLE_ADMIN']);


        $form = $this->createForm(AdminCreatorFormType::class , $admin);
        $form->add('send',SubmitType::class, ['label'=> 'Create Admin']);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
            $admin->setPassword($passwordHasher->hashPassword($admin, $admin->getPassword()));
            $em->persist($admin);
            $em->flush();

            $this->addFlash('info', 'Le nouvelle admin a bien été crée !');
            return $this->render('MainTemplate/Anonyme/Accueil.html.twig');
        }

        $args = array(
            'form' => $form->createView(),
        );

        return $this->render('MainTemplate/SuperAdmin/addAdmin.html.twig',$args);
    }
}
