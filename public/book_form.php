<?php
session_start();
require_once '../config/database.php';

// Enable error reporting for debugging
error_reporting(E_ALL);
ini_set('display_errors', 1);

if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['send'])) {
    // Debug: Print all POST data
    error_log("Form submitted with data: " . print_r($_POST, true));
    
    // Sanitize inputs
    $name = $connection->real_escape_string($_POST['name']);
    $email = $connection->real_escape_string($_POST['email']);
    $phone = $connection->real_escape_string($_POST['phone']);
    $address = $connection->real_escape_string($_POST['address']);
    $location = $connection->real_escape_string($_POST['location']);
    $guests = (int)$_POST['guests'];
    $arrivals = $connection->real_escape_string($_POST['arrivals']);
    $leaving = $connection->real_escape_string($_POST['leaving']);

    // Debug: Print SQL query
    $debug_sql = "INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) 
                 VALUES ('$name', '$email', '$phone', '$address', '$location', $guests, '$arrivals', '$leaving')";
    error_log("SQL Query: " . $debug_sql);

    // Prepare and execute query
    $stmt = $connection->prepare("INSERT INTO book_form (name, email, phone, address, location, guests, arrivals, leaving) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
    if (!$stmt) {
        error_log("Prepare failed: " . $connection->error);
        $_SESSION['error_message'] = "Database error. Please try again later.";
        header('Location: book.php');
        exit();
    }
    
    $stmt->bind_param("sssssiss", $name, $email, $phone, $address, $location, $guests, $arrivals, $leaving);
    
    if ($stmt->execute()) {
        $last_id = $connection->insert_id;
        error_log("New record created successfully. Last inserted ID is: " . $last_id);
        $_SESSION['success_message'] = "Booking successful! Your booking ID is: " . $last_id;
    } else {
        $error_msg = "Error: " . $stmt->error;
        error_log($error_msg);
        $_SESSION['error_message'] = $error_msg;
    }
    
    $stmt->close();
    $connection->close();
    
    header('Location: book.php');
    exit();
} else {
    $_SESSION['error_message'] = "Invalid request.";
    header('Location: book.php');
    exit();
}