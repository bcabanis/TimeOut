<?php

namespace App\Repository;

use App\Document\Tags;
use Doctrine\Bundle\MongoDBBundle\ManagerRegistry;
use Doctrine\Bundle\MongoDBBundle\Repository\ServiceDocumentRepository;

class TagsRepository extends ServiceDocumentRepository
{
    public function __construct(ManagerRegistry $registry)
    {
        // Appelle le constructeur parent de ServiceDocumentRepository
        // et lui passe le ManagerRegistry et la classe Tags
        parent::__construct($registry, Tags::class);
    }

    /**
     * Sauvegarde l'entité Tags dans la base de données MongoDB.
     *
     * @param Tags $tags L'entité Tags à sauvegarder.
     */
    public function save(Tags $tags): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Persiste l'entité Tags
        $objectManager->persist($tags);

        // Enregistre les modifications dans la base de données
        $objectManager->flush();
    }

    /**
     * Supprime l'entité Tags de la base de données MongoDB.
     *
     * @param Tags $tags L'entité Tags à supprimer.
     */
    public function remove(Tags $tags): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Supprime l'entité Tags de l'ObjectManager
        $objectManager->remove($tags);

        // Enregistre les modifications dans la base de données
        $objectManager->flush();
    }
}
