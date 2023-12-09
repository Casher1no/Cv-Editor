<?php

namespace App\Models\Cv;

class CvAddress
{
    private ?string $country;
    private ?string $index;
    private ?string $city;
    private ?string $street;
    private ?string $number;

    public function __construct(
        string $country = null,
        string $index = null,
        string $city = null,
        string $street = null,
        string $number = null
    )
    {
        $this->country = $country;
        $this->index = $index;
        $this->city = $city;
        $this->street = $street;
        $this->number = $number;
    }

    public function country(): string
    {
        return $this->country;
    }

    public function index(): string
    {
        return $this->index;
    }

    public function city(): string
    {
        return $this->city;
    }

    public function street(): string
    {
        return $this->street;
    }

    public function number(): string
    {
        return $this->number;
    }
}