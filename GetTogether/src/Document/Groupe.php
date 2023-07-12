<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints\Date;

#[MongoDB\Document]
class Groupe
{
    #[MongoDB\Id]
    private string $id;

    public function getId(): string
    {
        return $this->id;
    }

}