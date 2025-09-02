<?php
session_start();
require_once __DIR__ . '/../config/database.php';
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Travel Agency</title>
    <link rel="stylesheet" href="/TravelManagement/assets/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
</head>
<body>
    <section class="header">
        <a href="/TravelManagement/public/index.php" class="logo"><img src="/TravelManagement/assets/images/logo.jpg" alt="Logo"></a>
        <nav class="navbar">
            <a href="/TravelManagement/public/index.php">home</a>
            <a href="/TravelManagement/public/about.php">about</a>
            <a href="/TravelManagement/public/package.php">package</a>
            <a href="/TravelManagement/public/book.php">book</a>
        </nav>
        <div id="menu-btn" class="fas fa-bars"></div>
    </section>