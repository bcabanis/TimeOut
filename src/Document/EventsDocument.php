<?php

namespace App\Document;

use App\Repository\EventRepository;
use DateTimeInterface;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Events
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type:"date")]
    private ?DateTimeInterface $startDate;

    #[MongoDB\Field(type:"date")]
    private ?DateTimeInterface $endDate;

    #[MongoDB\Field(type:"string")]
    private string $description = '';

    #[MongoDB\Field(type:"string")]
    private string $picture = '';

    #[MongoDB\Field(type:"string")]
    private string $place = '';

    #[MongoDB\Field(type:"string")]
    private string $planner = '';

    #[MongoDB\Field(type: 'string')]
    private string $title = '';

    // Nouvelle propriété "address" avec visibilité publique
    #[MongoDB\Field(type: 'string')]
    public string $address = '';
    

    // Autres méthodes et propriétés...

    public function getId(): string
    {
        return $this->id;
    }

    public function getStartDate(): ?DateTimeInterface
    {
        return $this->startDate;
    }

    public function setStartDate($startDate): Events
    {
        $this->startDate = $startDate;
        return $this;
    }

    public function getEndDate(): ?DateTimeInterface
    {
        return $this->endDate;
    }

    public function setEndDate($endDate): Events
    {
        $this->endDate = $endDate;
        return $this;
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
// 
}

