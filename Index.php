<?php

require_once 'vendor/autoload.php';

use App\Redirect;
use App\Route;
use App\Routes;
use App\View;
use Twig\Environment;
use Twig\Loader\FilesystemLoader;

session_start();

$dotenv = Dotenv\Dotenv::createImmutable(__DIR__, '.env');
$dotenv->load();

$builder = new DI\ContainerBuilder();
$builder->addDefinitions([
    // TODO : add interfaces
]);
$container = $builder->build();

$dispatcher = FastRoute\simpleDispatcher(function (FastRoute\RouteCollector $r) {
    $routes = new Routes();

    foreach ($routes->getRoutes() as $route) {
        if ($route instanceof Route) {
            $r->addRoute($route->getMethod(), $route->getRoute(), $route->getHandler());
        }
    }
});

$httpMethod = $_SERVER['REQUEST_METHOD'];
$uri = $_SERVER['REQUEST_URI'];

if (false !== $pos = strpos($uri, '?')) {
    $uri = substr($uri, 0, $pos);
}
$uri = rawurldecode($uri);


$routeInfo = $dispatcher->dispatch($httpMethod, $uri);

$twig = new Environment(new FilesystemLoader('app/Views'));

switch ($routeInfo[0]) {
    case FastRoute\Dispatcher::NOT_FOUND:
        echo $twig->render('404.html');
        break;
    case FastRoute\Dispatcher::METHOD_NOT_ALLOWED:
        $allowedMethods = $routeInfo[1];
        // ... 405 Method Not Allowed
        break;
    case FastRoute\Dispatcher::FOUND:

        $controller = $routeInfo[1][0];
        $method = $routeInfo[1][1];
        $vars = $routeInfo[2];

        $response = (new $controller())->$method($vars);

        if ($response instanceof View) {
            try {
                echo $twig->render($response->getPath() . '.html', $response->getVars());
            } catch (\Twig\Error\Error $e) {
                echo 'Twig Exception: ' . $e->getMessage();
                die;
            }
        }

        if ($response instanceof Redirect) {
            header('Location: ' . $response->getLocation());
        }

        break;
}