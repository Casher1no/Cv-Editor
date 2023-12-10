<?php

namespace App\Services\Cv\Save;

class SaveCvRequest
{
    private int $id;
    private array $data;

    public function __construct(int $id, array $data)
    {
        $this->id = $id;
        $this->data = $data;
    }

    public function id(): int
    {
        return $this->id;
    }

    public function data(): array
    {
        return $this->data;
    }
}