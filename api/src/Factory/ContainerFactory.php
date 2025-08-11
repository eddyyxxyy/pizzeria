<?php

declare(strict_types=1);

namespace App\Factory;

use DI\ContainerBuilder;
use Psr\Container\ContainerInterface;

class ContainerFactory
{
    public static function create(): ContainerInterface
    {
        $containerBuilder = new ContainerBuilder();

        // Production optimizations
        if ($_ENV['APP_ENV'] === 'production') {
            $containerBuilder->enableCompilation(__DIR__ . '/../../tmp');
            $containerBuilder->writeProxiesToFile(true, __DIR__ . '/../../tmp/proxies');
        }

        // Load container definitions
        $containerBuilder->addDefinitions(__DIR__ . '/../../config/container.php');

        return $containerBuilder->build();
    }
}
