<?php

namespace App\Document;

use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class Events
{

    #[MongoDB\Id]
    protected $id;

    
    #[MongoDB\Field(type:"string")]
    protected $category;

    #[MongoDB\Field(type:"string")]
    protected $title;

    #[MongoDB\Field(type:"string")]
    protected $description;

    #[MongoDB\Field(type:"string", name:"date")]
    protected $eventDate;

    #[MongoDB\Field(type:"string")]
    protected $address;

    #[MongoDB\Field(type:"string", name:"image_url")]
    protected $imageUrl;

    #[MongoDB\Field(type:"string", name:"eventId")]
    protected $eventId;

    #[MongoDB\Field(type:"string", name:"orga")]
    protected $orga;

    // Add getters and setters for each property

    public function getId()
    {
        return $this->id;
    }

    public function getCategory(): ?string
    {
        return $this->category;
    }

    public function setCategory(string $category): self
    {
        $this->category = $category;
        return $this;
    }

    public function getTitle(): ?string
    {
        return $this->title;
    }

    public function setTitle(string $title): self
    {
        $this->title = $title;
        return $this;
    }

    public function getDescription(): ?string
    {
        return $this->description;
    }

    public function setDescription(string $description): self
    {
        $this->description = $description;
        return $this;
    }

    public function getEventDate(): ?string
    {
        return $this->eventDate;
    }

    public function setEventDate(string $eventDate): self
    {
        $this->eventDate = $eventDate;
        return $this;
    }

    public function getAddress(): ?string
    {
        return $this->address;
    }

    public function setAddress(string $address): self
    {
        $this->address = $address;
        return $this;
    }

    public function getImageUrl(): ?string
    {
        return $this->imageUrl;
    }

    public function setImageUrl(string $imageUrl): self
    {
        $this->imageUrl = $imageUrl;
        return $this;
    }

    public function geteventId(): ?string
    {
        return $this->eventId;
    }

    public function seteventId(string $eventId): self
    {
        $this->eventId = $eventId;
        return $this;
    }
    
    public function GetOrga(): ?string
    {
        return $this->orga;
    }

    public function SetOrga(string $orga): self
    {
        $this->orga = $orga;
        return $this;
    }
}

