<?php

namespace App\Entity\Cv;

use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('cv_experience')]
class CvExperience
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'cv_id')]
    private int $cvId;
    #[Column(nullable: true)]
    private string $name = '';
    #[Column(nullable: true)]
    private string $profession = '';
    #[Column(nullable: true)]
    private string $workload = '';
    #[Column(nullable: true)]
    private string $experience = '';
    #[ManyToOne(inversedBy: 'experience')]
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

    public function profession(): string
    {
        return $this->profession;
    }

    public function setProfession(string $profession): void
    {
        $this->profession = $profession;
    }

    public function workload(): string
    {
        return $this->workload;
    }

    public function setWorkload(string $workload): void
    {
        $this->workload = $workload;
    }

    public function experience(): string
    {
        return $this->experience;
    }

    public function setExperience(string $experience): void
    {
        $this->experience = $experience;
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