<?php

namespace App\Controller;

use App\Document\Users;
use App\Form\RegistrationFormType;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\PasswordHasher\Hasher\UserPasswordHasherInterface;
use Symfony\Component\Routing\Annotation\Route;

class RegistrationController extends AbstractController
{
    #[Route('/registration', name: 'app_registration')]
    public function register(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        $message = '';
        // Créer une nouvelle instance de l'entité Users
        $user = new Users();

        // Créer le formulaire d'inscription en utilisant RegistrationFormType et l'entité Users
        $form = $this->createForm(RegistrationFormType::class, $user);

        // Gère la soumission du formulaire
        $form->handleRequest($request);

        // Vérifie si le formulaire a été soumis et s'il est valide
        if ($form->isSubmitted() && $form->isValid()) {
            // Hashe le mot de passe de l'utilisateur en utilisant l'objet UserPasswordHasherInterface
            $hashedPassword = $userPasswordHasher->hashPassword($user, $user->getPassword());
            // Défini le mot de passe hashé dans l'objet Users
            $user->setPassword($hashedPassword);

            // Enregistre l'utilisateur dans la base de données en utilisant la fonction save dans le UserRepository
            $userRepository->save($user);

            // Redirige vers une autre page pour afficher un message de succès
            return $this->redirectToRoute('registration_success');
        }

        // Affiche le formulaire d'inscription à la vue Twig
        return $this->render('registration/index.html.twig', [
            'message' => $message,
            'registrationForm' => $form->createView(),
        ]);
    }


    #[Route('/registration-success', name: 'registration_success')]
    public function register_success(Request $request, UserRepository $userRepository, UserPasswordHasherInterface $userPasswordHasher): Response
    {
        return $this->render('registration/success.html.twig', [
            'message' => 'Votre compte a été créé.',
        ]);
    }
}
