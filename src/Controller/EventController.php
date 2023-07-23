<?php

namespace App\Controller;

use App\Document\ChatMessage;
use App\Document\Users;
use App\Document\Events;
use App\Repository\ChatMessageRepository;
use App\Repository\EventRepository;
use App\Repository\UserRepository;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\HttpFoundation\Session\SessionInterface;
use Symfony\Component\Routing\Annotation\Route;


#[Route('/event')]
class EventController extends AbstractController
{

    #[Route('/', name: 'app_event')]
    public function index(EventRepository $eventRepository): Response
    {
        $event = new Events();

        $eventId = '';
        $event->setEventId($eventId);

        $eventRepository->save($event);

        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/{eventId}', name: 'app_event_show')]
    public function show(EventRepository $eventRepository, ChatMessageRepository $chatMessageRepository, string $eventId, SessionInterface $sessionInterface): Response
    {
        // Récupére l'événement associé à l'ID de l'URL
        $event = $eventRepository->findOneBy(['eventId' => $eventId]);
        
        // Si l'évènement n'existe pas on renvoie un message d'erreur
        if (!$event) {
            throw $this->createNotFoundException('Aucun évènement trouvé.');
        }

        // Récupére les messages de chat associés à l'événement
        $chatMessages = $chatMessageRepository->findBy(['event' => $event]);

        // Récupére l'email de l'utilisateur connecté depuis la session
        $emailSession = $sessionInterface->get('email');

        // Affiche la page d'affichage de l'événement avec les messages de chat
        return $this->render('event/show.html.twig', [
            'event' => $event,
            'chatMessages' => $chatMessages,
            'email' => $emailSession
            
        ]);
    }

    #[Route('/{eventId}/post_chat_message', name: 'app_event_post_chat_message', methods: ['GET', 'POST'])]
    public function postChatMessage(Request $request, EventRepository $eventRepository, UserRepository $userRepository, ChatMessageRepository $chatMessageRepository, string $eventId, SessionInterface $sessionInterface): Response
    {
        // Récupére l'email de l'utilisateur connecté depuis la session
        $emailSession = $sessionInterface->get('email');
        // Recherche l'utilisateur connecté dans la base de données en utilisant l'email
        $authenticatedUser = $userRepository->findOneBy(['email' => $emailSession]);

        // Récupére l'événement associé à l'ID de l'URL
        $event = $eventRepository->findOneBy(['eventId' => $eventId]);

        // Si l'évènement n'existe pas on renvoie un message d'erreur
        if (!$event) {
            throw $this->createNotFoundException('Aucun évènement trouvé.');
        }

        // Récupére le contenu du message de chat à partir de la requête POST
        $content = $request->request->get('content');

        // Vérifie si $content est null et lui attribuer une valeur par défaut si c'est le cas
        if ($content === null) {
            $content = ''; // Valeur par défaut
        }

        // Créer un nouveau message de chat
        $chatMessage = new ChatMessage();
        $chatMessage->setContent($content);
        $chatMessage->setEvent($event);
        
        // Associe l'utilisateur au message de chat
        $chatMessage->setUser($authenticatedUser);

        // Enregistre le nouveau message de chat dans la base de données
        $chatMessageRepository->save($chatMessage);

        // Redirige l'utilisateur vers la page d'affichage de l'événement
        return $this->redirectToRoute('app_event_show', ['eventId' => $eventId]);
    }
}










// #[Route('/test_api', name: 'app_event_test_api')]
// public function testApi(EventRepository $eventRepository): Response
// {
//     $event = new Events();
//     $event->setDescription('Message de test');
//     $event->setPlace('Paris');

//     $eventRepository->save($event);

//     return $this->render('event/index.html.twig', [
//         'controller_name' => 'EventController',
//     ]);
// }

// #[Route('/eventchat', name: 'app_event_chat')]
// public function chat(): Response
// {

//     return $this->render('event/chat.html.twig', [
//         'controller_name' => 'EventController',
//     ]);
// }

// #[Route('/eventtags', name: 'app_event_tags')]
// public function tags(): Response
// {

//     return $this->render('event/tags.html.twig', [
//         'controller_name' => 'EventController',
//     ]);
// }

// #[Route('/test_api', name: 'app_event_test_api')]
// public function testApi(EventRepository $eventRepository): Response
// {

//     return $this->render('event/index.html.twig', [
//         'controller_name' => 'EventController',
//     ]);
// }

// #[Route('/test_api', name: 'app_event_test_api')]
// public function testApi(EventRepository $eventRepository): Response
// {

//     return $this->render('event/index.html.twig', [
//         'controller_name' => 'EventController',
//     ]);
// }
