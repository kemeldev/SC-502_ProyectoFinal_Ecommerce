<?php
// Database credentials
$host = "localhost";
$user = "ecommerce_user";
$password = "passwordDebilPrueba";
$dbname = "ecommerce";

try {
    // Create a new PDO connection
    $pdo = new PDO("mysql:host=$host;dbname=$dbname;charset=utf8", $user, $password);
    // Set error mode to exception
    $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
} catch (PDOException $e) {
    // Handle connection errors
    die("Error connecting to the database: " . $e->getMessage());
}
?>