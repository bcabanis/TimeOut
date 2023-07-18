<?php

namespace App\Controller;


use App\Document\Events;
use App\Repository\EventRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Document\EventsDocument;


#[Route('/event')]
class EventController extends AbstractController
{
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

    #[Route('/eventchat', name: 'app_event_chat')]
    public function chat(): Response
    {

        return $this->render('event/chat.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/eventtags', name: 'app_event_tags')]
    public function tags(): Response
    {

        return $this->render('event/tags.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

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
}
