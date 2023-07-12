<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints\Date;

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