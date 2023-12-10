<?php

namespace App\Repository\Cv;

use App\Database\Database;
use App\Entity\Cv\Cv;


class MySqlCvRepository implements CvRepository
{
    #[\Override] public function create(Cv $cv): void
    {
        try {
            Database::em()->persist($cv);
            Database::em()->flush($cv);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), "\n");
        }
    }

    #[\Override] public function get(int $id): Cv
    {
        try {
            return Database::em()->find(Cv::class, $id);
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), "\n");
        }
    }

    #[\Override] public function getAll(): array
    {
        try {
            return Database::em()->getRepository(Cv::class)->findAll();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), "\n");
        }
    }

    #[\Override] public function save(): void
    {
        try {
            Database::em()->flush();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), "\n");
        }
    }

    #[\Override] public function delete(Cv $cv): void
    {
        try {
            Database::em()->remove($cv);
            Database::em()->flush();
        } catch (\Exception $e) {
            throw new \Exception($e->getMessage(), "\n");
        }
    }
}