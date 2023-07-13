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
     * @param Tags $entity L'entité Tags à sauvegarder.
     * @param bool $flush Indique si les modifications doivent être immédiatement enregistrées dans la base de données. Par défaut, les modifications sont seulement persistées.
     */
    public function save(Tags $entity, bool $flush = false): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Persiste l'entité Tags
        $objectManager->persist($entity);

        // Si le paramètre $flush est défini sur true, enregistre les modifications dans la base de données
        if ($flush) {
            $objectManager->flush();
        }
    }

    /**
     * Supprime l'entité Tags de la base de données MongoDB.
     *
     * @param Tags $entity L'entité Tags à supprimer.
     * @param bool $flush Indique si les modifications doivent être immédiatement enregistrées dans la base de données après la suppression. Par défaut, les modifications ne sont pas automatiquement enregistrées.
     */
    public function remove(Tags $entity, bool $flush = false): void
    {
        // Obtient l'ObjectManager spécifique à MongoDB (ODM) de Doctrine
        $objectManager = $this->getDocumentManager();

        // Supprime l'entité Tags de l'ObjectManager
        $objectManager->remove($entity);

        // Si le paramètre $flush est défini sur true, enregistre les modifications dans la base de données
        if ($flush) {
            $objectManager->flush();
        }
    }
}

