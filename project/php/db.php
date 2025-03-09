<?php
$host = "localhost";  // Change if using a different host
$user = "root";       // Default user in XAMPP
$pass = "";           // Default password is empty in XAMPP
$dbname = "mind"; // Your database name

$conn = new mysqli($host, $user, $pass, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
?>
