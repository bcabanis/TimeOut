<?php

namespace App\Controller;

use App\Document\Event;
use App\Repository\EventRepository;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;

#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event')]
    public function index(EventRepository $eventRepository): Response
    {
        $event = new Event();
        $event->setDescription('Message de test');
        $event->setPlace('Paris');

        $eventRepository->save($event);
        
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    #[Route('/test_api', name: 'app_event_test_api')]
    public function testApi(EventRepository $eventRepository): Response
    {
        $event = new Event();
        $event->setDescription('Message de test');
        $event->setPlace('Paris');

        $eventRepository->save($event);
        
        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }
}
