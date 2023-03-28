<?php

namespace App\Controller;

use App\Entity\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use Doctrine\ORM\EntityManagerInterface;

class AdminController extends AbstractController
{
    #[Route('/addProduct', name: 'admin_addProduct')]
    public function addProductAction(): Response
    {
        return $this->render('MainTemplate/Admin/addProduct.html.twig');
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

        dump($users);

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
        }
        else
        {
            $this->addFlash('info', 'The user does not exist.');
        }

        return $this->redirectToRoute('super_admin_editUsers');
    }
}
