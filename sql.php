<?php
$host = "localhost";      // Hostname (XAMPP's MySQL server)
$user = "root";           // MySQL username (default root)
$ps = "";                 // No password for root (empty string)
$project = "DBMS-MINI-Project";  // Your database name

// Establishing the connection
$conn = mysqli_connect($host, $user, $ps, $project);

// Check if the connection was successful
if (!$conn) {
    die("Database connection failed: " . mysqli_connect_error());
}
?>
