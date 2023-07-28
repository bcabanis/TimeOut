<?php

namespace App\Document;

use App\Repository\CalendarRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document(repositoryClass: CalendarRepository::class)]
class Calendar
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $name = "";

    #[MongoDB\Field(type: 'collection')]
    private array $subCategories = [];

    public function getId(): string
    {
        return $this->id;
    }

    public function getName(): string
    {
        return $this->name;
    }

    public function setName(string $name): self
    {
        $this->name = $name;

        return $this;
    }

    public function getSubCategories(): array
    {
        return $this->subCategories;
    }

    public function addSubCalendar(string $name): self
    {
        $this->subCategories[] = $name;

        return $this;
    }
}
