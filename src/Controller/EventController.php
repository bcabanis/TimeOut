<?php

namespace App\Controller;

use App\Document\Events;
use App\Repository\EventRepository;
use App\Repository\CategoryRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\JsonResponse;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event')]
    public function index(EventRepository $eventRepository): Response
    {
        // Crée un nouvel événement pour tester et le sauvegarde en base de données
        $event = new Events();
        $event->setDescription('Message de test');
        $event->setPlace('Paris');

        $eventRepository->save($event);

        // Rend la vue event/index.html.twig avec un paramètre supplémentaire 'controller_name'
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/categories', name: 'app_event_categories')]
    public function categories(CategoryRepository $categoryRepository, EventRepository $eventRepository, DocumentManager $dm): Response
    {
        // Récupère toutes les catégories depuis la base de données MongoDB.
        $categories = $categoryRepository->findAllCategories();

        // Récupérer tous les événements depuis la base de données MongoDB.
        $events = $eventRepository->findAll();

        // Récupérer le nom de l'utilisateur loggé depuis la bse de MongoDB.
        $firstName = "Maxime";

    
        // Rend la vue event/categories.html.twig avec les catégories et les événements récupérés
        return $this->render('event/categories.html.twig', [
            'categories' => $categories,
            'events' => $events, // Passer les événements à la vue pour les afficher
            'firstName' => $firstName,
        ]);
    }


    #[Route('/calendar', name: 'app_event_calendar')]
    public function calendar(): Response
    {
        // Exemple de données de calendrier (pour les besoins de démonstration)
        $calendarData = [
            '2023-07-01' => ['Événement 1', 'Événement 2'],
            '2023-07-05' => ['Événement 3'],
            '2023-07-10' => ['Événement 4', 'Événement 5', 'Événement 6'],
        ];

        // Passez les données à votre modèle Twig et générez la vue
        return $this->render('event/calendar.html.twig', [
            'calendarData' => $calendarData,
        ]);
    }

    #[Route('/mestags', name: 'app_event_mestags')]
    public function mestags(): Response
    {
        $tags = [
        ];

        // Passez les données à votre modèle Twig et générez la vue
        return $this->render('event/mestags.html.twig', [
            'TagsData' => $tags,
        ]);
    }

    #[Route('/mesevents', name: 'app_event_mesevents')]
    public function mesevents(): Response
    {
        $events = [
        ];

        // Passez les données à votre modèle Twig et générez la vue
        return $this->render('event/mesevents.html.twig', [
            'EventsData' => $events,
        ]);
    }
}
