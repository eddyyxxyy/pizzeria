<?php

declare(strict_types=1);

use Slim\App;

return function (App $app): void {
    $container = $app->getContainer();
    $settings = $container->get('settings');

    // Parse JSON, Form data and Multipart
    $app->addBodyParsingMiddleware();

    // Add routing middleware
    $app->addRoutingMiddleware();

    // Error handling
    $app->addErrorMiddleware(
        $settings['debug'],
        true,
        true,
    );
};
