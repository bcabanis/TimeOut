<?php

namespace App\Controller;

use App\Document\Groupe;
use App\Document\Users;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/user')]
class UserController extends AbstractController
{
    
    public function index(): Response
    {
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }

    #[Route('/', name: 'app_user')]
    public function listUsers(DocumentManager $dm)
    {
        $groups = $dm->getRepository(Groupe::class)->findAll();

        return $this->render('group/list_groups.html.twig', [
            'groups' => $groups,
        ]);
    }
}



// 
