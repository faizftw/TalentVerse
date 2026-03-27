<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
$app = require_once __DIR__ . '/../bootstrap/app.php';

// Vercel serverless functions have a read-only filesystem except for /tmp.
// We must set the storage path to /tmp/storage so Laravel can write cache, views, and logs.
$storagePath = $_ENV['APP_STORAGE'] ?? '/tmp/storage';
$app->useStoragePath($storagePath);

$directories = [
    $app->storagePath('framework/cache/data'),
    $app->storagePath('framework/sessions'),
    $app->storagePath('framework/views'),
    $app->storagePath('logs'),
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

// Also ensure we override the compiled view path so it definitely points to /tmp
putenv('VIEW_COMPILED_PATH=' . $app->storagePath('framework/views'));
$_ENV['VIEW_COMPILED_PATH'] = $app->storagePath('framework/views');

$app->handleRequest(Request::capture());
