<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('webSekolahV2.beranda');
});
Route::get('/contoh', function () {
    return response('TES LARAVEL BERHASIL', 200)
        ->header('Content-Type', 'text/plain');
});