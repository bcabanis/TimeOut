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

    // Redirection vers la connexion
    #[Route('/loginconnexion', name: 'app_login_connexion')]
    public function connexion(): Response
    {
        return $this->render('login/connexion.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    // Redirection vers la personnalisation
    #[Route('/loginpersonnalisation', name: 'app_login_personnalisation')]
    public function personnalisation(): Response
    {
        return $this->render('login/personnalisation.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    // Redirection vers le choix des avatars
    #[Route('/loginavatar', name: 'app_login_avatar')]
    public function avatar(): Response
    {
        return $this->render('login/avatar.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }

    // Redirection vers le choix des tags
    #[Route('/logintags', name: 'app_login_tags')]
    public function tags(): Response
    {
        return $this->render('login/tags.html.twig', [
            'controller_name' => 'LoginController',
        ]);
    }
}
