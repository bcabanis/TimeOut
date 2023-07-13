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
     * @param User $entity L'entité User à sauvegarder.
     * @param bool $flush Indique si les modifications doivent être immédiatement enregistrées dans la base de données. Par défaut, les modifications sont seulement persistées.
     */
    public function save(User $entity, bool $flush = false): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Persiste l'entité User
        $objectManager->persist($entity);

        // Si le paramètre $flush est défini sur true, enregistre les modifications dans la base de données
        if ($flush) {
            $objectManager->flush();
        }
    }

    /**
     * Supprime l'entité User de la base de données MongoDB.
     *
     * @param User $entity L'entité User à supprimer.
     * @param bool $flush Indique si les modifications doivent être immédiatement enregistrées dans la base de données après la suppression. Par défaut, les modifications ne sont pas automatiquement enregistrées.
     */
    public function remove(User $entity, bool $flush = false): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Supprime l'entité User de l'ObjectManager
        $objectManager->remove($entity);

        // Si le paramètre $flush est défini sur true, enregistre les modifications dans la base de données
        if ($flush) {
            $objectManager->flush();
        }
    }
}
