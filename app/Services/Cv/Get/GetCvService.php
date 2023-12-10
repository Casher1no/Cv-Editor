<?php

namespace App\Services\Cv\Get;

use App\Entity\Cv\Cv;
use App\Repository\Cv\CvRepository;

class GetCvService
{
    private CvRepository $repository;

    public function __construct(CvRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(GetCvRequest $request): Cv
    {
        return $this->repository->get($request->id());
    }
}