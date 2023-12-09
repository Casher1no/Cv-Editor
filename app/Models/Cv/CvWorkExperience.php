<?php

namespace App\Models\Cv;

class CvWorkExperience
{
    private string $name;
    private string $profession;
    private string $workload;
    private string $workExperience;

    public function __construct(string $name, string $profession, string $workload, string $workExperience)
    {
        $this->name = $name;
        $this->profession = $profession;
        $this->workload = $workload;
        $this->workExperience = $workExperience;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function profession(): string
    {
        return $this->profession;
    }

    public function workload(): string
    {
        return $this->workload;
    }

    public function workExperience(): string
    {
        return $this->workExperience;
    }
}