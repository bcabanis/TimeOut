<?php

namespace App\Controller;

use App\Document\User;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

class UserController extends AbstractController
{
    #[Route('/user', name: 'app_user')]
    public function index(User $user): Response
    {
        
<<<<<<< Updated upstream
        $user = new User;
        
=======

>>>>>>> Stashed changes
        return $this->render('user/index.html.twig', [
            'controller_name' => 'UserController',
        ]);
    }
}
