<?php

namespace App\Document;

use DateTimeInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Events
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $eventId = '';

    #[MongoDB\Field(type: 'date')]
    private ?DateTimeInterface $startDate = null;

    #[MongoDB\Field(type: 'date')]
    private ?DateTimeInterface $endDate = null;

    #[MongoDB\Field(type: 'string')]
    private string $description;

    #[MongoDB\Field(type: 'string')]
    private string $picture;

    #[MongoDB\Field(type: 'string')]
    private string $place = '';

    #[MongoDB\Field(type: 'string')]
    private string $planner = '';

    #[MongoDB\Field(type: 'string')]
    private string $title;

    #[MongoDB\ReferenceMany(targetDocument:ChatMessage::class, mappedBy:"eventId")]
    private $chatMessages; // Collection des messages de chat associés à l'événement

    // créer un tableau "messages"

    public function getId(): string
    {
        return $this->id;
    }

    public function getEventId(): string
    {
        return $this->eventId;
    }

    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    public function getDescription(): string
    {
        return $this->description;
    }

    public function getPicture(): string
    {
        return $this->picture;
    }

    public function getPlace(): string
    {
        return $this->place;
    }

    public function getPlanner(): string
    {
        return $this->planner;
    }

    public function getTitle(): string
    {
        return $this->title;
    }

    public function getChatMessages()
    {
        return $this->chatMessages;
    }

    public function setId(string $id): Events
    {
        $this->id = $id;

        return $this;
    }

    public function setEventId(string $eventId): Events
    {
        $this->eventId = $eventId;

        return $this;
    }

    public function setStartDate(\DateTime $startDate): Events
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function setEndDate(\DateTime $endDate): Events
    {
        $this->endDate = $endDate;

        return $this;
    }

    public function setDescription(string $description): Events
    {
        $this->description = $description;

        return $this;
    }

    public function setPicture(string $picture): Events
    {
        $this->picture = $picture;

        return $this;
    }

    public function setPlace(string $place): Events
    {
        $this->place = $place;

        return $this;
    }

    public function setPlanner(string $planner): Events
    {
        $this->planner = $planner;

        return $this;
    }

    public function setTitle(string $title): Events
    {
        $this->title = $title;

        return $this;
    }

    public function setChatMessages($chatMessages): void
    {
        $this->chatMessages = $chatMessages;
    }
    
    // créer la méthode getMessages()

    // créer la méthode addMessage($message)

}