<?php

namespace App\Repository\Cv;

use App\Entity\Cv\Cv;

interface CvRepository
{
    public function create(Cv $cv): void;

    public function get(int $id): Cv;

    public function getAll(): array;

    public function save(): void;

    public function delete($cv): void;
}