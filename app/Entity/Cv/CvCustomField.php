<?php

namespace App\Entity\Cv;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('cv_custom_field')]
class CvCustomField
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'cv_id')]
    private int $cvId;
    #[Column(nullable: true)]
    private string $name = '';
    #[Column(nullable: true)]
    private string $description = '';
    #[ManyToOne(inversedBy: 'customFields')]
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

    public function description(): string
    {
        return $this->description;
    }

    public function setDescription(string $description): void
    {
        $this->description = $description;
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