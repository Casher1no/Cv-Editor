<?php

namespace App;


use App\Controllers\CvController;

class Routes
{
    public function getRoutes(): array
    {
        return [
            $this->createRoute('GET', '/', [CvController::class, 'selection']),
            $this->createRoute('GET', '/cv/create', [CvController::class, 'create']),
            $this->createRoute('POST', '/cv/delete/{id:\d+}', [CvController::class, 'delete']),
            $this->createRoute('GET', '/cv/edit/{id:\d+}', [CvController::class, 'edit']),
            $this->createRoute('POST', '/cv/save/{id:\d+}', [CvController::class, 'save']),
            $this->createRoute('GET', '/cv/inspect/{id:\d+}', [CvController::class, 'inspect'])
        ];
    }

    private function createRoute(string $method, string $route, array $handler): Route
    {
        return new Route($method, $route, $handler);
    }
}