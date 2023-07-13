<?php

namespace App\Document;

use App\Repository\EventRepository; // a priori pas besoin d'être appelée
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Events
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'date')]
    private string $startDate;

    #[MongoDB\Field(type: 'date')]
    private string $endDate;

    #[MongoDB\Field(type: 'string')]
    private string $description;

    #[MongoDB\Field(type: 'string')]
    private string $picture;

    #[MongoDB\Field(type: 'string')]
    private string $place;

    #[MongoDB\Field(type: 'string')]
    private string $planner;

    #[MongoDB\Field(type: 'string')]
    private string $title;


    public function getId(): string
    {
        return $this->id;
    }

    public function getStartDate(): string
    {
        return $this->startDate;
    }

    public function getEndDate(): string
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

    public function setstartDate(\DateTime $startDate): Events
    {
        $this->startDate = $startDate;

        return $this;
    }

    public function setendDate(\DateTime $endDate): Events
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
// 
}