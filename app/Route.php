<?php

namespace App;

class Route
{
    private string $method;
    private string $route;
    private array $handler;

    public function __construct(string $method, string $route, array $handler)
    {
        $this->method = $method;
        $this->route = $route;
        $this->handler = $handler;
    }

    public function getHandler(): array
    {
        return $this->handler;
    }

    public function getMethod(): string
    {
        return $this->method;
    }

    public function getRoute(): string
    {
        return $this->route;
    }
}