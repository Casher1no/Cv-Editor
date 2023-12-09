<?php

namespace App\Models\Cv;

class CvCustomField
{
    private string $field;
    private string $description;

    public function __construct(string $field, string $description)
    {
        $this->field = $field;
        $this->description = $description;
    }

    public function field(): string
    {
        return $this->field;
    }

    public function description(): string
    {
        return $this->description;
    }
}