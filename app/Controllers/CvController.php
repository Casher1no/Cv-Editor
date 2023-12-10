<?php

namespace App\Controllers;

use App\Redirect;
use App\Services\Cv\Create\CreateCvService;
use App\Services\Cv\Delete\DeleteCvRequest;
use App\Services\Cv\Delete\DeleteCvService;
use App\Services\Cv\Get\GetCvRequest;
use App\Services\Cv\Get\GetCvService;
use App\Services\Cv\GetAll\GetAllCvService;
use App\View;
use Psr\Container\ContainerInterface;

class CvController
{
    private ContainerInterface $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function selection(): View
    {
        $service = $this->container->get(GetAllCvService::class);
        $data = $service->execute();

        return new View('index', [
            'cv' => $data
        ]);
    }

    public function create(): Redirect
    {
        $service = $this->container->get(CreateCvService::class);
        $service->execute();

        return new Redirect('/');
    }

    public function delete(array $vars): Redirect
    {
        $service = $this->container->get(DeleteCvService::class);
        $service->execute(new DeleteCvRequest((int)$vars['id']));

        return new Redirect('/');
    }

    public function edit(array $vars): View
    {
        $service = $this->container->get(GetCvService::class);
        $cv = $service->execute(new GetCvRequest((int)$vars['id']));

        return new View('Cv/edit', [
            'cv' => $cv
        ]);
    }
}