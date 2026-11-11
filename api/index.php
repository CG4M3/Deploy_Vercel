
<?php

// Direktori penyimpanan sementara untuk Vercel
$storagePath = '/tmp/laravel-storage';

$directories = [
    $storagePath . '/app/private',
    $storagePath . '/app/public',
    $storagePath . '/framework/cache/data',
    $storagePath . '/framework/sessions',
    $storagePath . '/framework/views',
    $storagePath . '/logs',
];

// Buat seluruh direktori yang dibutuhkan Laravel
foreach ($directories as $directory) {
    if (!is_dir($directory)) {
        mkdir($directory, 0755, true);
    }
}

// Arahkan storage Laravel ke direktori sementara
$_ENV['LARAVEL_STORAGE_PATH'] = $storagePath;
$_SERVER['LARAVEL_STORAGE_PATH'] = $storagePath;
putenv("LARAVEL_STORAGE_PATH={$storagePath}");

// Jalankan Laravel
require __DIR__ . '/../public/index.php';
