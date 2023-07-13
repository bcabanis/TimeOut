<?php

namespace App\Document;

use App\Repository\EventRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Event
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'date')]
    private string $date1;

    #[MongoDB\Field(type: 'date')]
    private string $date2;

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

    public function getDate1(): string
    {
        return $this->date1;
    }

    public function getDate2(): string
    {
        return $this->date2;
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

    public function setDate1(\DateTime $date1): Event
    {
        $this->date1 = $date1;

        return $this;
    }

    public function setDate2(\DateTime $date2): Event
    {
        $this->date2 = $date2;

        return $this;
    }

    public function setDescription(string $description): Event
    {
        $this->description = $description;

        return $this;
    }

    public function setPicture(string $picture): Event
    {
        $this->picture = $picture;

        return $this;
    }

    public function setPlace(string $place): Event
    {
        $this->place = $place;

        return $this;
    }

    public function setPlanner(string $planner): Event
    {
        $this->planner = $planner;

        return $this;
    }

    public function setTitle(string $title): Event
    {
        $this->title = $title;

        return $this;
    }
// 
}