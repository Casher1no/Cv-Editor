<?php

namespace App\Services\Cv\Delete;

use App\Repository\Cv\CvRepository;

class DeleteCvService
{
    private CvRepository $repository;

    public function __construct(CvRepository $repository)
    {
        $this->repository = $repository;
    }

    public function execute(DeleteCvRequest $request): void
    {
        $cv = $this->repository->get($request->id());

        $this->repository->delete($cv);
        $this->repository->save();
    }
}