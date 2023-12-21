<?php
// index.php

define('ALLOWED', true);

// Read and output image from private_assets directory
$imagePath = __DIR__ . '/../private_assets/images/example.jpg';

if (file_exists($imagePath)) {
    header('Content-Type: image/jpeg');
    readfile($imagePath);
    exit();
}

include('src/views/index.php');

// Rest of your code