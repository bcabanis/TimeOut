<?php

namespace App\Controller;

use App\Document\Users;
use App\Form\LoginFormType;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/login')]
class LoginController extends AbstractController
{
    #[Route('/', name: 'app_login')]
    public function login(Request $request): Response
    {
        // Créer une nouvelle instance de l'entité Users
        $user = new Users();

        // Créer le formulaire d'inscription en utilisant LoginFormType et l'entité Users
        $form = $this->createForm(LoginFormType::class, $user);

        // Gère la soumission du formulaire
        $form->handleRequest($request);

        return $this->render('login/index.html.twig', [
            'loginForm' => $form->createView(),
        ]);
    }

    #[Route('/profil', name: 'app_profil')]
    public function profil(): Response
    {
        return $this->render('login/profil.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    #[Route('/avatar', name: 'app_avatar')]
    public function avatar(): Response
    {
        return $this->render('login/avatar.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    #[Route('/tags', name: 'app_tags')]
    public function tags(): Response
    {
        return $this->render('login/tags.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
