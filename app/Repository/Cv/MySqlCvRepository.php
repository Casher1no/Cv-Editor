<?php

namespace App\Repository\Cv;

use App\Database\Database;
use App\Entity\Cv\Cv;

class MySqlCvRepository implements CvRepository
{
    #[\Override] public function create(Cv $cv): void
    {
        Database::entityManager()->persist($cv);
    }

    #[\Override] public function edit(Cv $cv): void
    {
        // TODO: Implement edit() method.
    }

    #[\Override] public function delete(int $id): void
    {
        // TODO: Implement delete() method.
    }
}