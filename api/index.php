<?php

use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// ─── Vercel Serverless Bootstrap ────────────────────────────────────────────
// Vercel's filesystem is read-only except for /tmp.
// We MUST override ALL cache / storage paths BEFORE Laravel bootstraps,
// otherwise Laravel tries to read bootstrap/cache/services.php (gitignored)
// and fails with "Target class [view] does not exist".
// ────────────────────────────────────────────────────────────────────────────

// 1. Override paths that Laravel checks DURING bootstrapping.
//    These must be set before require'ing the autoloader / app so that
//    env() picks them up immediately.
$_ENV['APP_STORAGE']          = '/tmp/storage';
$_ENV['APP_CONFIG_CACHE']     = '/tmp/storage/framework/cache/config.php';
$_ENV['APP_ROUTES_CACHE']     = '/tmp/storage/framework/cache/routes-v7.php';
$_ENV['APP_EVENTS_CACHE']     = '/tmp/storage/framework/cache/events.php';
$_ENV['APP_PACKAGES_CACHE']   = '/tmp/storage/framework/cache/packages.php';
$_ENV['APP_SERVICES_CACHE']   = '/tmp/storage/framework/cache/services.php';
$_ENV['VIEW_COMPILED_PATH']   = '/tmp/storage/framework/views';
$_ENV['LOG_CHANNEL']          = 'errorlog';
$_ENV['SESSION_DRIVER']       = 'cookie';
$_ENV['CACHE_STORE']          = 'array';

// Also set via putenv so getenv() calls see them too
foreach ($_ENV as $key => $value) {
    if (str_starts_with($key, 'APP_') || str_starts_with($key, 'VIEW_') ||
        str_starts_with($key, 'LOG_') || str_starts_with($key, 'SESSION_') ||
        str_starts_with($key, 'CACHE_')) {
        putenv("$key=$value");
    }
}

// 2. Create all required directories in /tmp
$directories = [
    '/tmp/storage/framework/cache/data',
    '/tmp/storage/framework/sessions',
    '/tmp/storage/framework/views',
    '/tmp/storage/logs',
];

foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0777, true);
    }
}

// 3. Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__ . '/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// 4. Register the Composer autoloader...
require __DIR__ . '/../vendor/autoload.php';

// 5. Bootstrap Laravel and redirect storage to /tmp
$app = require_once __DIR__ . '/../bootstrap/app.php';
$app->useStoragePath('/tmp/storage');

// 6. Handle the request
$app->handleRequest(Request::capture());
