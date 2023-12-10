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
#[Table('cv_address')]
class CvAddress
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'cv_id')]
    private int $cvId;
    #[Column(nullable: true)]
    private string $country = '';
    #[Column(nullable: true)]
    private string $index = '';
    #[Column(nullable: true)]
    private string $city = '';
    #[Column(nullable: true)]
    private string $street = '';
    #[Column(nullable: true)]
    private string $number = '';
    #[OneToOne(inversedBy: 'address')]
    private Cv $cv;

    public function id(): int
    {
        return $this->id;
    }

    public function cvId(): int
    {
        return $this->cvId;
    }

    public function country(): string
    {
        return $this->country;
    }

    public function setCountry(string $country): void
    {
        $this->country = $country;
    }

    public function index(): string
    {
        return $this->index;
    }

    public function setIndex(string $index): void
    {
        $this->index = $index;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function setCity(string $city): void
    {
        $this->city = $city;
    }

    public function street(): string
    {
        return $this->street;
    }

    public function setStreet(string $street): void
    {
        $this->street = $street;
    }

    public function number(): string
    {
        return $this->number;
    }

    public function setNumber(string $number): void
    {
        $this->number = $number;
    }

    public function cv(): Cv
    {
        return $this->cv;
    }

    public function setCv(Cv $cv): void
    {
        $this->cv = $cv;
    }
}