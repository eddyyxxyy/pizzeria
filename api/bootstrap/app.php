<?php

declare(strict_types=1);

use App\Factory\ApplicationFactory;

require_once __DIR__ . '/env.php';

return ApplicationFactory::create();
