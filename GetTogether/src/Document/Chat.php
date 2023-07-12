<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;
use Symfony\Component\Validator\Constraints\Date;

#[MongoDB\Document]
class Chat
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'date')]
    private string $date;

    #[MongoDB\Field(type: 'string')]
    private string $content;


    public function getId(): string
    {
        return $this->id;
    }

    public function getDate(): string
    {
        return $this->date;
    }

    public function getContent(): string
    {
        return $this->content;
    }


    public function setDate(date $date): Chat
    {
        $this->date = $date;

        return $this;
    }

    public function setContent(string $content): Chat
    {
        $this->content = $content;

        return $this;
    }

// 
}