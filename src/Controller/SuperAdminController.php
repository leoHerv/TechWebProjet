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
        $user = new User();
        $user->setRoles(['ROLE_ADMIN']);
        $user->setStatus(true);

        $form = $this->createForm(AdminCreatorFormType::class , $user);
        $form->add('send',SubmitType::class, ['label'=> 'Create Admin']);
        $form->handleRequest($request);

        if($form->isSubmitted()) {
            $em->persist($user);
            $em->flush();
        }

        $args = array(
            'addAdmin' => $form->createView(),
        );

        return $this->render('MainTemplate/SuperAdmin/addAdmin.html.twig',$args);
    }
}
