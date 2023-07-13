<?php

namespace App\Repository;

use App\Document\User;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class UserRepository extends ServiceDocumentRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        // Appelle le constructeur parent de ServiceDocumentRepository
        // et lui passe le ManagerRegistry et la classe User
        parent::__construct($registry, User::class);
    }

    /**
     * Sauvegarde l'entité User dans la base de données MongoDB.
     *
     * @param User $user L'entité User à sauvegarder.
     */
    public function save(User $user): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Persiste l'entité User
        $objectManager->persist($user);

        // Enregistre les modifications dans la base de données
        $objectManager->flush();
    }

    /**
     * Supprime l'entité User de la base de données MongoDB.
     *
     * @param User $user L'entité User à supprimer.
     */
    public function remove(User $user): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Supprime l'entité User de l'ObjectManager
        $objectManager->remove($user);

        // Enregistre les modifications dans la base de données
        $objectManager->flush();
    }
}
