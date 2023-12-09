<?php

namespace App\Models\Cv;

class CvMainData
{
    private string $name;
    private string $surname;
    private string $phoneNumber;
    private string $email;


    public function name(): string
    {
        return $this->name;
    }

    public function surname(): string
    {
        return $this->surname;
    }

    public function phoneNumber(): string
    {
        return $this->phoneNumber;
    }

    public function email(): string
    {
        return $this->email;
    }
}