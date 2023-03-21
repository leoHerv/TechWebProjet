<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
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
    public function addAdminAction(): Response
    {
        return $this->render('MainTemplate/SuperAdmin/addAdmin.html.twig');
    }
}
