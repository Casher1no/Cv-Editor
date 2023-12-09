<?php

namespace App\Models\Cv;

class CvCustomField
{
    private string $name;
    private string $description;

    public function __construct(string $field, string $description)
    {
        $this->name = $field;
        $this->description = $description;
    }

    public function name(): string
    {
        return $this->name;
    }

    public function description(): string
    {
        return $this->description;
    }
}