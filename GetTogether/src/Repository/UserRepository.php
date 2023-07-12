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
}