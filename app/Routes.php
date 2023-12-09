<?php

namespace App;


use App\Controllers\CvController;

class Routes
{
    public function getRoutes(): array
    {
        return [
            $this->createRoute('GET', '/', [CvController::class, 'selection']),
            $this->createRoute('GET', '/cv/create', [CvController::class, 'create'])
        ];
    }

    private function createRoute(string $method, string $route, array $handler): Route
    {
        return new Route($method, $route, $handler);
    }
}