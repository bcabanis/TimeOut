<?php

namespace App\Controller;

use App\Document\Events;
use App\Document\Users;
use App\Document\ChatMessage;
use App\Repository\EventRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/event')]
class EventController extends AbstractController
{
    private DocumentManager $documentManager;

    public function __construct(DocumentManager $documentManager)
    {
        $this->documentManager = $documentManager;
    }

    #[Route('/', name: 'app_event')]
    public function index(EventRepository $eventRepository): Response
    {
        $event = new Events();
        $event->setDescription('Message de test');
        $event->setPlace('Paris');

        $eventRepository->save($event);

        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/eventchat', name: 'app_event_chat')]
    public function chat(Request $request): Response
    {
        if ($request->isMethod('POST')) {
            $content = $request->request->get('content');

            // Récupérer l'utilisateur connecté directement depuis la collection Users
            $user = $this->documentManager->getRepository(Users::class)->find($this->getUser()->getId());

            $sender = $user->getPseudo();

            // Utiliser $sender et $content pour créer et enregistrer le message dans la collection Events
            $message = new ChatMessage();
            $message->setContent($content);
            $message->setSender($sender);

            $event = new Events();
            $event->addMessage($message);

            // Enregistrer l'événement dans la collection Events
            $this->documentManager->persist($event);
            $this->documentManager->flush();
        }

        return $this->render('event/chat.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
