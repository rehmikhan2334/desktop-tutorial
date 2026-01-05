<?php
$servername = "localhost";
$username = "root";
$password = "";   // yahan kuch nahi likhna
$dbname = "college";

// Connection create
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
echo "Connected successfully";
echo "<br>";
 $result=$conn->query("show tables")->fetch_all();
 print_r($result);
?>
