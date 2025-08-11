<?php

declare(strict_types=1);

namespace App\Factory;

use Slim\App;
use DI\Bridge\Slim\Bridge;
use App\Factory\ContainerFactory;

class ApplicationFactory
{
    public static function create(): App
    {
        $container = ContainerFactory::create();

        $app = Bridge::create($container);

        $middlewareConfigurator = require __DIR__ . '/../../config/middleware.php';
        $middlewareConfigurator($app);

        $routeConfigurator = require __DIR__ . '/../../config/routes.php';
        $routeConfigurator($app);

        return $app;
    }
}
