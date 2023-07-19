<?php

namespace App\Controller;

use App\Document\Category;
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
        $event = new Events();
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
        $event = new Events();
        $event->setDescription('Message de test');
        $event->setPlace('Paris');

        $eventRepository->save($event);

        return $this->render('event/index.html.twig', [
            'controller_name' => 'EventController',
        ]);
    }

    
    #[Route('/categories', name: 'app_event_categories')]
    public function categories(CategoryRepository $categoryRepository, DocumentManager $dm): Response
    {
    $categories = $categoryRepository->findAllCategories();

    $category = new Category();
    $category->setName('Musique');
    $category->addSubCategory('Rock');
    $category->addSubCategory('Rap');
    $category->addSubCategory('Techno');
    $category->addSubCategory('Jazz');
    $category->addSubCategory('Métal');
    $dm->persist($category);
    $dm->flush();

    return $this->render('event/categories.html.twig', [
        'categories' => $categories,
    ]);
    }

    
}
