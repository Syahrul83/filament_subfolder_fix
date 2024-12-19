<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));
// tentukan lokasi file laravel 
// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../../../../dinaspu/storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/../../../../dinaspu/vendor/autoload.php';

// Bootstrap Laravel and handle the request...
(require_once __DIR__ . '/../../../../dinaspu/bootstrap/app.php')
    ->handleRequest(Request::capture());
