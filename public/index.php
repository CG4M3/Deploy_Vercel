<?php

use Illuminate\Foundation\Application;
use Illuminate\Http\Request;

define('LARAVEL_START', microtime(true));

// Determine if the application is in maintenance mode...
if (file_exists($maintenance = __DIR__.'/../storage/framework/maintenance.php')) {
    require $maintenance;
}

// Register the Composer autoloader...
require __DIR__.'/../vendor/autoload.php';

// Bootstrap Laravel and handle the request...
/** @var Application $app */
$app = require_once __DIR__.'/../bootstrap/app.php';

// Jalankan bootstrap HTTP Kernel terlebih dahulu
$kernel = $app->make(
    \Illuminate\Contracts\Http\Kernel::class
);

$kernel->bootstrap();

// Periksa apakah View Service Provider terdaftar
$providers = $app->getLoadedProviders();

$diagnostic = [
    'app_created' => $app instanceof Application,

    'view_bound' => $app->bound('view'),

    'view_provider_loaded' => isset(
        $providers[\Illuminate\View\ViewServiceProvider::class]
    ),

    'storage_path' => $app->storagePath(),
];

// Uji apakah service view benar-benar bisa dibuat
try {
    $view = $app->make('view');

    $diagnostic['view_resolved'] = true;
    $diagnostic['view_class'] = get_class($view);

} catch (\Throwable $e) {
    $diagnostic['view_resolved'] = false;
    $diagnostic['view_error'] = get_class($e)
        . ': ' . $e->getMessage();
}

// Simpan hasil diagnostik di Vercel Runtime Logs
error_log(
    '[LARAVEL DIAGNOSTIC] ' .
    json_encode($diagnostic, JSON_PRETTY_PRINT)
);

// Lanjutkan request seperti biasa
$request = Request::capture();

$response = $kernel->handle($request);

$response->send();

$kernel->terminate($request, $response);
