<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('webSekolahV2.beranda');
});
Route::get('/contoh', function () {
    return response('TES LARAVEL BERHASIL', 200)
        ->header('Content-Type', 'text/plain');
});

Route::get('/__diag-view', function () {
    $app = app();

    $providers = $app->getLoadedProviders();

    $result = [
        'request_bound' => $app->bound('request'),
        'view_bound' => $app->bound('view'),

        'view_provider_loaded' => isset(
            $providers[\Illuminate\View\ViewServiceProvider::class]
        ),
    ];

    try {
        $view = $app->make('view');

        $result['view_resolved'] = true;
        $result['view_class'] = get_class($view);

    } catch (\Throwable $e) {
        $result['view_resolved'] = false;
        $result['view_error'] = get_class($e)
            . ': ' . $e->getMessage();
    }

    return response()->json($result);
});