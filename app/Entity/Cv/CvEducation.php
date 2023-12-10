<?php

namespace App\Entity\Cv;

use App\Enums\SchoolStatus;
use Doctrine\ORM\Mapping\Column;
use Doctrine\ORM\Mapping\Entity;
use Doctrine\ORM\Mapping\GeneratedValue;
use Doctrine\ORM\Mapping\Id;
use Doctrine\ORM\Mapping\ManyToOne;
use Doctrine\ORM\Mapping\Table;

#[Entity]
#[Table('cv_education')]
class CvEducation
{
    #[Id]
    #[Column, GeneratedValue]
    private int $id;
    #[Column(name: 'cv_id')]
    private int $cvId;
    #[Column(nullable: true)]
    private string $name = '';
    #[Column(nullable: true)]
    private string $faculty = '';
    #[Column(name: 'study_program',nullable: true)]
    private string $studyProgram = '';
    #[Column(name: 'education_level',nullable: true)]
    private string $educationLevel = '';
    #[Column(name: 'time_spend_in_studies', nullable: true)]
    private string $timeSpendInStudies = '';
    #[Column(nullable: true)]
    private string $status = '';
    #[ManyToOne(inversedBy: 'education')]
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

    public function faculty(): string
    {
        return $this->faculty;
    }

    public function setFaculty(string $faculty): void
    {
        $this->faculty = $faculty;
    }

    public function studyProgram(): string
    {
        return $this->studyProgram;
    }

    public function setStudyProgram(string $studyProgram): void
    {
        $this->studyProgram = $studyProgram;
    }

    public function educationLevel(): string
    {
        return $this->educationLevel;
    }

    public function setEducationLevel(string $educationLevel): void
    {
        $this->educationLevel = $educationLevel;
    }

    public function timeSpendInStudies(): string
    {
        return $this->timeSpendInStudies;
    }

    public function setTimeSpendInStudies(string $timeSpendInStudies): void
    {
        $this->timeSpendInStudies = $timeSpendInStudies;
    }

    public function status(): string
    {
        return $this->status;
    }

    public function setStatus(string $status): void
    {
        $this->status = $status;
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