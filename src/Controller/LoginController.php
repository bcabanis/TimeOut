<?php

namespace App\Controller;

use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/login')]
class LoginController extends AbstractController
{
    #[Route('/', name: 'app_login')]
    public function index(): Response
    {
        return $this->render('login/index.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }


    #[Route('/loginconnexion', name: 'app_login_connexion')]
    public function connexion(): Response
    {
        return $this->render('login/connexion.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }


    #[Route('/loginpersonnalisation', name: 'app_login_personnalisation')]
    public function personnalisation(): Response
    {
        return $this->render('login/personnalisation.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    #[Route('/loginavatar', name: 'app_login_avatar')]
    public function avatar(): Response
    {
        return $this->render('login/avatar.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    #[Route('/logintags', name: 'app_login_tags')]
    public function tags(): Response
    {
        return $this->render('login/tags.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
