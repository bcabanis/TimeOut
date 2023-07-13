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
     * @param bool $flush Indique si les modifications doivent être immédiatement enregistrées dans la base de données. Par défaut, les modifications sont seulement persistées.
     */
    public function save(Event $entity, bool $flush = false): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Persiste l'entité Event
        $objectManager->persist($entity);

        // Si le paramètre $flush est défini sur true, enregistre les modifications dans la base de données
        if ($flush) {
            $objectManager->flush();
        }
    }

    /**
     * Supprime l'entité Event de la base de données MongoDB.
     *
     * @param Event $entity L'entité Event à supprimer.
     * @param bool $flush Indique si les modifications doivent être immédiatement enregistrées dans la base de données après la suppression. Par défaut, les modifications ne sont pas automatiquement enregistrées.
     */
    public function remove(Event $entity, bool $flush = false): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Supprime l'entité Event de l'ObjectManager
        $objectManager->remove($entity);

        // Si le paramètre $flush est défini sur true, enregistre les modifications dans la base de données
        if ($flush) {
            $objectManager->flush();
        }
    }
}


