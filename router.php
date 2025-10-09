<?php
// router.php

$path = parse_url($_SERVER["REQUEST_URI"], PHP_URL_PATH);
$file = __DIR__ . $path;

// Serve existing files directly
if (is_file($file)) {
    return false;
}

// Serve PHP file if it exists
if (is_file($file . '.php')) {
    include $file . '.php';
    exit;
}

// Otherwise fallback to index.php
include __DIR__ . '/index.php';
