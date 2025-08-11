<?php

declare(strict_types=1);

return [
    'settings' => [
        'env' => $_ENV['APP_ENV'],
        'debug' => (boolean) $_ENV['APP_DEBUG'],
    ],
];
