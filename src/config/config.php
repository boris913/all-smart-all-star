<?php
// Configuration settings for the application

// Load environment variables from .env file
if (file_exists(__DIR__ . '/../../.env')) {
    $dotenv = Dotenv\Dotenv::createImmutable(__DIR__ . '/../../');
    $dotenv->load();
}

// Database configuration
define('DB_HOST', getenv('DB_HOST'));
define('DB_NAME', getenv('DB_NAME'));
define('DB_USER', getenv('DB_USER'));
define('DB_PASS', getenv('DB_PASS'));

// Payment gateway API keys
define('PAYMENT_GATEWAY_API_KEY', getenv('PAYMENT_GATEWAY_API_KEY'));
define('PAYMENT_GATEWAY_SECRET_KEY', getenv('PAYMENT_GATEWAY_SECRET_KEY'));

// Other configuration settings
define('APP_NAME', 'All Smart All Star');
define('APP_URL', 'http://localhost/all-smart-all-star');
define('CURRENCY', 'XAF'); // Change as needed

// Enable error reporting for development
ini_set('display_errors', 1);
ini_set('display_startup_errors', 1);
error_reporting(E_ALL);
?>