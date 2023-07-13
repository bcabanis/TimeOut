<?php

namespace App\Document;

use App\Repository\UserRepository;
use Doctrine\ODM\MongoDB\Mapping\Annotations as MongoDB;

#[MongoDB\Document]
class User
{
    #[MongoDB\Id]
    private string $id;

    #[MongoDB\Field(type: 'string')]
    private string $firstName;

    #[MongoDB\Field(type: 'string')]
    private string $lastName;

    #[MongoDB\Field(type: 'string')]
    private string $dateNaissance;

    #[MongoDB\Field(type: 'string')]
    private string $email;

    #[MongoDB\Field(type: 'string')]
    private string $password;

    #[MongoDB\Field(type: 'string')]
    private string $profilPicture;

    #[MongoDB\Field(type: 'string')]
    private string $role;


    public function getId(): string
    {
        return $this->id;
    }

    public function getFirstName(): string
    {
        return $this->firstName;
    }

    public function getLastName(): string
    {
        return $this->lastName;
    }

    public function getDateNaissance(): string
    {
        return $this->dateNaissance;
    }

    public function getEmail(): string
    {
        return $this->email;
    }

    public function getPassword(): string
    {
        return $this->password;
    }

    public function getProfilPicture(): string
    {
        return $this->profilPicture;
    }

    public function getRole(): string
    {
        return $this->role;
    }

    public function setFirstName(string $firstName): User
    {
        $this->firstName = $firstName;

        return $this;
    }

    public function setLastName(string $lastName): User
    {
        $this->lastName = $lastName;

        return $this;
    }

    public function setDateNaissance(string $dateNaissance): User
    {
        $this->dateNaissance = $dateNaissance;

        return $this;
    }

    public function setEmail(string $email): User
    {
        $this->email = $email;

        return $this;
    }

    public function setPassword(string $password): User
    {
        $this->password = $password;

        return $this;
    }

    public function setProfilPicture(string $profilPicture): User
    {
        $this->profilPicture = $profilPicture;

        return $this;
    }

    public function setRole(string $role): User
    {
        $this->role = $role;

        return $this;
    }
// 
}



















