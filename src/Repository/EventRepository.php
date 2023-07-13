<?php

namespace App\Repository;

use App\Document\Event;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class EventRepository extends ServiceDocumentRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        // Appelle le constructeur parent de ServiceDocumentRepository
        // et lui passe le ManagerRegistry et la classe Event
        parent::__construct($registry, Event::class);
    }

    /**
     * Sauvegarde l'entité Event dans la base de données MongoDB.
     *
     * @param Event $entity L'entité Event à sauvegarder.
     */
    public function save(Event $event): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Persiste l'entité Event
        $objectManager->persist($event);

        // Enregistre les modifications dans la base de données
        $objectManager->flush();
    }

    /**
     * Supprime l'entité Event de la base de données MongoDB.
     *
     * @param Event $event L'entité Event à supprimer.
     */
    public function remove(Event $event): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Supprime l'entité Event de l'ObjectManager
        $objectManager->remove($event);

        // Enregistre les modifications dans la base de données
        $objectManager->flush();
    }
}
