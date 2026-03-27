<?php

require __DIR__ . '/../vendor/autoload.php';

$app = require_once __DIR__ . '/../bootstrap/app.php';

// Vercel serverless functions have a read-only filesystem except for /tmp.
// We must set the storage path to /tmp/storage so Laravel can write cache, views, and logs.
$app->useStoragePath($_ENV['APP_STORAGE'] ?? '/tmp/storage');

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

require __DIR__ . '/../public/index.php';
