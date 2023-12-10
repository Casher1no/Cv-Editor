<?php

namespace App\Services\Cv\GetAll;

use App\Repository\Cv\CvRepository;

class GetAllCvService
{
    private CvRepository $repository;

    public function __construct(CvRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(): array
    {
        return $this->repository->getAll();
    }
}