<?php

namespace App\Controller;

use App\Document\Events;
use App\Repository\EventRepository;
use App\Repository\CategoryRepository;
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

    #[Route('/test_api', name: 'app_event_test_api')]
    public function testApi(EventRepository $eventRepository): Response
    {
        // Crée un autre événement pour tester et le sauvegarde en base de données
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

        // $category1 = new Category();
        // $category1->setName('Arts');
        // $category1->addSubCategory('Baller');
        // $category1->addSubCategory('Bijoux');
        // $category1->addSubCategory('Chorales');
        // $category1->addSubCategory('Comedie');
        // $category1->addSubCategory('Design');
        // $category1->addSubCategory('Litterature');
        // $category1->addSubCategory('Comédie musicale');
        // $category1->addSubCategory('Orchestres');
        // $category1->addSubCategory('Peinture');
        // $category1->addSubCategory('Sculpture');
        // $category2 = new Category();
        // $category2->setName('Business');
        // $category2->addSubCategory('Associations');
        // $category2->addSubCategory('Carrière');
        // $category2->addSubCategory('Immobilier');
        // $category2->addSubCategory('Investissement');
        // $category2->addSubCategory('Marketing');
        // $category2->addSubCategory('Medias');
        // $category2->addSubCategory('ONG');
        // $category2->addSubCategory('PME');
        // $category2->addSubCategory('Startups');
        // $category3 = new Category();
        // $category3->setName('Communauté');
        // $category3->addSubCategory('Benevolat');
        // $category3->addSubCategory('Cours Particuliers');
        // $category3->addSubCategory('Histoire');
        // $category3->addSubCategory('Langues');
        // $category3->addSubCategory('Actions locales');
        // $category3->addSubCategory('Nationalité');
        // $category3->addSubCategory('Parrainages');
        // $category3->addSubCategory('Participatif'); 
        // $category3->addSubCategory('Atelier'); 
        // $category4 = new Category();
        // $category4->setName('Musique');
        // $category4->addSubCategory('Alternatif');
        // $category4->addSubCategory('Blues');
        // $category4->addSubCategory('Classique');
        // $category4->addSubCategory('Dj/Dance');
        // $category4->addSubCategory('Folk');
        // $category4->addSubCategory('Hip-Hop');
        // $category4->addSubCategory('Jazz');
        // $category4->addSubCategory('Opéra');
        // $category4->addSubCategory('Pop');
        // $category4->addSubCategory('R&B');
        // $category4->addSubCategory('Rap');
        // $category4->addSubCategory('Rock');
        // $category5 = new Category();
        // $category5->setName('Sport');
        // $category5->addSubCategory('Marche');
        // $category5->addSubCategory('Cyclisme');
        // $category5->addSubCategory('Football');
        // $category5->addSubCategory('Basket');
        // $category5->addSubCategory('Moto');
        // $category5->addSubCategory('Tennis');
        // $category5->addSubCategory('Hockey');
        // $category5->addSubCategory('Golf');
        // $category5->addSubCategory('Arts Martiaux');
        // $category5->addSubCategory('Body building');
        // $category5->addSubCategory('Yoga');
        // $category5->addSubCategory('Boxe Anglaise');

        // // On persiste les catégories dans la base de données
        // $dm->persist($category1);
        // $dm->persist($category2);
        // $dm->persist($category3);
        // $dm->persist($category4);
        // $dm->persist($category5);
        // // Persistez les autres catégories si nécessaire
        // $dm->flush();

        // Rend la vue event/categories.html.twig avec les catégories et les événements récupérés
        return $this->render('event/categories.html.twig', [
            'categories' => $categories,
            'events' => $events, // Passer les événements à la vue pour les afficher
        ]);
    }
}
