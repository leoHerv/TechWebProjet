<?php

namespace App\Controller;

use App\Entity\User;
use App\Form\AdminCreatorFormType;
use Doctrine\ORM\EntityManagerInterface;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\Form\Extension\Core\Type\SubmitType;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class SuperAdminController extends AbstractController
{
    #[Route('/editUsers', name: 'super_admin_editUsers')]
    public function editUsersAction(): Response
    {
        return $this->render('MainTemplate/SuperAdmin/editUsers.html.twig');
    }

    #[Route('/addAdmin', name: 'super_admin_addAdmin')]
    public function addAdminAction(EntityManagerInterface $em , Request $request): Response
    {
        $admin = new User();
        $admin->setRoles(['ROLE_ADMIN']);
        $admin->setStatus(true);

        $form = $this->createForm(AdminCreatorFormType::class , $admin);
        $form->add('send',SubmitType::class, ['label'=> 'Create Admin']);
        $form->handleRequest($request);

        if($form->isSubmitted() && $form->isValid())
        {
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
