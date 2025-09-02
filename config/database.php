<?php
// Database configuration
define('DB_HOST', 'localhost');
define('DB_USER', 'root');
define('DB_PASS', '');
define('DB_NAME', 'book_db');

// Create connection
$connection = new mysqli(DB_HOST, DB_USER, DB_PASS, DB_NAME, 3307);

// Check connection
if ($connection->connect_error) {
    die("Connection failed: " . $connection->connect_error);
}

// Set charset to utf8mb4
$connection->set_charset("utf8mb4");