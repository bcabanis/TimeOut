<?php

namespace App\Controller;

use App\Repository\CategoryRepository;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;

class DashboardController extends AbstractController
{

    // Redirection vers le dashboard
    #[Route('/dashboard', name: 'app_dashboard')]
    public function index(SessionInterface $sessionInterface, UserRepository $userRepository): Response
    {

        // Récupère l'email de l'utilisateur connecté depuis la session
        $email = $sessionInterface->get('email');

        // Récupère l'utilisateur depuis la base de données en utilisant l'email
        $user = $userRepository->findOneBy(['email' => $email]);

        return $this->render('dashboard/index.html.twig', [
            'user' => $user,
        ]);
    }

    #[Route('/categories', name: 'app_dashboard_categories')]
    public function categories(CategoryRepository $categoryRepository, EventRepository $eventRepository, DocumentManager $dm): Response
    {
        // Récupère toutes les catégories depuis la base de données MongoDB.
        $categories = $categoryRepository->findAllCategories();

        // Récupérer tous les événements depuis la base de données MongoDB.
        $events = $eventRepository->findAll();

        // Récupérer le nom de l'utilisateur loggé depuis la bse de MongoDB.
        $firstName = "Maxime";


        // Rend la vue event/categories.html.twig avec les catégories et les événements récupérés
        return $this->render('dashboard/categories.html.twig', [
            'categories' => $categories,
            'events' => $events, // Passer les événements à la vue pour les afficher
            'firstName' => $firstName,
        ]);
    }

    #[Route('/mestags', name: 'app_dashboard_mestags')]
    public function mestags(): Response
    {
        $tags = [];

        // Passez les données à votre modèle Twig et générez la vue
        return $this->render('dashboard/mestags.html.twig', [
            'TagsData' => $tags,
        ]);
    }
}
