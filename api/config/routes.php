<?php

declare(strict_types=1);

use Psr\Http\Message\ResponseInterface;
use Slim\App;

return function (App $app): void {
    // Health check
    $app->get('/', function (ResponseInterface $response) {
        $response->getBody()->write(json_encode(['status' => 'ok'], JSON_PRETTY_PRINT));

        return $response->withHeader('Content-Type', 'application/json');
    });
};
