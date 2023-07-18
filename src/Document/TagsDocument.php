<?php

namespace App\Document;

use App\Repository\TagsRepository; // a priori pas besoin d'être appelée
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Tags
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $tagName;

    public function getId(): string
    {
        return $this->id;
    }

    public function getTagName(): string
    {
        return $this->tagName;
    }

    public function setTagName(string $tagName): Tags
    {
        $this->tagName = $tagName;

        return $this;
    }
}