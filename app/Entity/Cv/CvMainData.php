<?php

namespace App\Entity\Cv;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\OneToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('cv_main')]
class CvMainData
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'cv_id')]
    private int $cvId;
    #[Column(nullable: true)]
    private string $name;
    #[Column(nullable: true)]
    private string $surname;
    #[Column(nullable: true)]
    private string $phoneNumber;
    #[Column(nullable: true)]
    private string $email;
    #[OneToOne(inversedBy: 'mainData')]
    private Cv $cv;

    public function id(): int
    {
        return $this->id;
    }

    public function cvId(): int
    {
        return $this->cvId;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function setName(string $name): void
    {
        $this->name = $name;
    }

    public function surname(): string
    {
        return $this->surname;
    }

    public function setSurname(string $surname): void
    {
        $this->surname = $surname;
    }

    public function phoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function setPhoneNumber(string $phoneNumber): void
    {
        $this->phoneNumber = $phoneNumber;
    }

    public function email(): string
    {
        return $this->email;
    }

    public function setEmail(string $email): void
    {
        $this->email = $email;
    }
}