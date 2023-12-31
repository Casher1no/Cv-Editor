<?php

namespace App\Services\Cv\Create;

use App\Factory\CvFactory;
use App\Repository\Cv\CvRepository;

class CreateCvService
{
    private CvRepository $repository;

    public function __construct(CvRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(): void
    {
        $this->repository->create(CvFactory::create());
    }
}