<?php

declare(strict_types=1);

use Dotenv\Dotenv;

$dotenv = Dotenv::createImmutable(__DIR__ . '/../');
$dotenv->load();

$dotenv->required('APP_ENV')->allowedValues(['local', 'production'])->notEmpty();
$dotenv->required('APP_DEBUG')->isBoolean()->notEmpty();
$dotenv->required('APP_NAME')->notEmpty();
$dotenv->required('APP_URL')->notEmpty();
