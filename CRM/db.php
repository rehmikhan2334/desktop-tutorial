<?php
$host = "localhost";
$user = "root";        // phpMyAdmin username
$pass = "";            // phpMyAdmin password
$db   = "login";

$conn = mysqli_connect($host, $user, $pass, $db);

if (!$conn) {
    die("Database connection failed");
}
?>
