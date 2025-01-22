<?php
$host = 'localhost';
$user = 'root'; // Default MySQL username
$pass = ''; // Default MySQL password
$db = 'data'; // Replace with your database name

$conn = new mysqli($host, $user, $pass, $db);

if ($conn->connect_error) {
    die("Database connection failed: " . $conn->connect_error);
}
?>
