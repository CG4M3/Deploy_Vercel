<?php

// Paksa Laravel menggunakan folder /tmp untuk menulis cache & session di serverless Vercel
$storagePath = '/tmp/storage/framework';
if (!is_dir($storagePath . '/views')) {
    mkdir($storagePath . '/views', 0755, true);
}
putenv("VIEW_COMPILED_PATH={$storagePath}/views");

// Arahkan ke file public bawaan Laravel
require __DIR__ . '/../public/index.php';
