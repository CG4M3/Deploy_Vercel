<?php

use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('webSekolahV2.beranda');
});
Route::get('/contoh', function () {
    return view('webSekolahV2.contoh');
});
