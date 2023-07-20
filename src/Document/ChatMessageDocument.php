<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class ChatMessage
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type:'string')]
    private string $content; // Contenu du message

    #[MongoDB\ReferenceOne(targetDocument:Events::class)]
    private ?Events $event; // Référence à l'événement

    
    public function getId(): string
    {
        return $this->id;
    }

    public function setId(string $id): void
    {
        $this->id = $id;
    }

    public function getContent(): string
    {
        return $this->content;
    }

    public function setContent(string $content): void
    {
        $this->content = $content;
    }

    public function getEvent(): ?Events
    {
        return $this->event;
    }

    public function setEvent(?Events $event): void
    {
        $this->event = $event;
    }
}

