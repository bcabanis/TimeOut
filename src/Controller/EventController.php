<?php

namespace App\Controller;

use App\Document\ChatMessage;
use App\Document\Events;
use App\Repository\ChatMessageRepository;
use App\Repository\EventRepository;
use App\Repository\CategoryRepository;
use App\Service\CallApiService;
use Doctrine\ODM\MongoDB\DocumentManager;
use Symfony\Bundle\FrameworkBundle\Controller\AbstractController;
use Symfony\Component\HttpFoundation\Request;
use Symfony\Component\HttpFoundation\Response;
use Symfony\Component\Routing\Annotation\Route;
use App\Document\User;

#[Route('/event')]
class EventController extends AbstractController
{
    #[Route('/', name: 'app_event')]
    public function index(EventRepository $eventRepository, CallApiService $callApiService, DocumentManager $dm): Response
    {
        $title = "";
        $description = "";
        $city = "";
        $region = "";
        $adresse = "";
        $image = "";
        $region = "";
        $motCle = "";

        $dataForJs = [];
        $dataTabForJs = [];

        $jsonData = '/assets/json/event.json';
        $eventsData = json_decode($jsonData, true);
        dd($dataForJs);
        
        // foreach ($dataTags['records'] as $data) {
        //     $dataFields = $data['fields'];

        //     $title = $dataFields['title_fr'];
        //     if (isset($dataFields['longdescription_fr'])) {
        //         $description = $dataFields['longdescription_fr'];
        //     } else {
        //         $description = $dataFields['description_fr'];
        //     }
            
        //     $city = $dataFields['location_city'];
        //     $region = $dataFields['location_region'];
        //     $adresse = $dataFields['location_address'];
        //     $image = $dataFields['image'];
        //     $eventId = $data['recordid'];
        //     if (isset($dataFields['keywords_fr'])) {
        //         $motCle = $dataFields['keywords_fr'];
        //     } else {
        //         $motCle = "";
        //     }
        //     // $beginDate = $dataFields['timings'].['begin'];
        //     // $endDate = $dataFields['timings'].['end'];

        //     $existingEvent = $eventRepository->findOneBy(['title' => $title]);

        //     if (!$existingEvent) {
        //         $event = new Events();
        //         $event->setTitle($title);
        //         $event->setDescription($description);
        //         $event->setCity($city);
        //         $event->setRegion($region);
        //         $event->setAdresse($adresse);
        //         $event->setPicture($image);
        //         $event->setEventId($eventId);
        //         $event->setMotCle($motCle);

        //         $eventRepository->save($event);
        //     }

        //     $dataForJs = [
        //         'title' => $title,
        //         'description' => $description,
        //         'city' => $city,
        //         'region' => $region,
        //         'adresse' => $adresse,
        //         'image' => $image,
        //         'eventId' => $eventId,
        //         'motCle' => $motCle,

        //     ];

        //     $dataTabForJs[] = $dataForJs; 

        // }

        foreach ($eventsData as $category => $events) {
            foreach ($events as $event) {
                $title = $event['Titre'];
                $existingEvent = $eventRepository->findOneBy(['title' => $title]);

                if (!$existingEvent) {
                    $eventDoc = new Events();
                    $eventDoc->setCategory($category);
                    $eventDoc->setTitle($event['Titre']);
                    $eventDoc->setDescription($event['Description']);
                    $eventDoc->setEventDate($event['Date_de_l_evenement']);
                    $eventDoc->setAddress($event['Adresse']);
                    $eventDoc->setImageUrl($event['URL_d_image']);
                    $eventDoc->setUniqueId($event['ID_unique']);

                    $eventRepository->save($eventDoc);
                }
  
            }
        }

        

        return new Response('Events inserted successfully!');

            // // Retourne les données dans le template requis 
            // return $this->render('event/affichage.html.twig', [
            //     'jsonData' => $dataTabForJs,
            // ]);
    }

    #[Route('/{eventId}', name: 'app_event_show')]
    public function show(EventRepository $eventRepository, ChatMessageRepository $chatMessageRepository, string $eventId): Response
    {
        // Récupére l'événement associé à l'ID de l'URL
        $event = $eventRepository->find($eventId);
        
        if (!$event) {
            throw $this->createNotFoundException('Aucun évènement trouvé.');
        }
        
        // Récupére les messages de chat associés à l'événement
        $chatMessages = $chatMessageRepository->findBy(['event' => $event]);
        
        // Affiche la page d'affichage de l'événement avec les messages de chat
        return $this->render('event/show.html.twig', [
            'event' => $event,
            'chatMessages' => $chatMessages,
        ]);
    }
    
    #[Route('/{eventId}/post_chat_message', name: 'app_event_post_chat_message', methods: ['POST'])]
    public function postChatMessage(Request $request, EventRepository $eventRepository, ChatMessageRepository $chatMessageRepository, string $eventId): Response
    {
        // Récupére l'événement associé à l'ID de l'URL
        $event = $eventRepository->find($eventId);
        
        if (!$event) {
            throw $this->createNotFoundException('Aucun évènement trouvé.');
        }
        
        // Récupére le contenu du message de chat à partir de la requête POST
        $content = $request->request->get('content');
        
        // Créer un nouveau message de chat
        $chatMessage = new ChatMessage();
        $chatMessage->setContent($content);
        $chatMessage->setEvent($event);
        
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

