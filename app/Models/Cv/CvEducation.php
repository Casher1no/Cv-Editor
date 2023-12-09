<?php

namespace App\Models\Cv;

use App\Enums\SchoolStatus;

class CvEducation
{
    private string $name;
    private string $faculty;
    private string $studyProgram;
    private string $educationLevel;
    private string $timeSpendInStudies;
    private SchoolStatus $status;

    public function __construct(
        string $name,
        string $faculty,
        string $studyProgram,
        string $educationLevel,
        string $timeSpendInStudies,
        SchoolStatus $status
    )
    {
        $this->name = $name;
        $this->faculty = $faculty;
        $this->studyProgram = $studyProgram;
        $this->educationLevel = $educationLevel;
        $this->timeSpendInStudies = $timeSpendInStudies;
        $this->status = $status;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function faculty(): string
    {
        return $this->faculty;
    }

    public function studyProgram(): string
    {
        return $this->studyProgram;
    }

    public function educationLevel(): string
    {
        return $this->educationLevel;
    }

    public function timeSpendInStudies(): string
    {
        return $this->timeSpendInStudies;
    }

    public function status(): SchoolStatus
    {
        return $this->status;
    }
}

