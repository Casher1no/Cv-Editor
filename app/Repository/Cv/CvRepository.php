<?php

namespace App\Repository\Cv;

use App\Models\Cv\Cv;

interface CvRepository
{
    public function create(Cv $cv): void;
    public function edit(Cv $cv): void;
    public function delete(int $id): void;
}