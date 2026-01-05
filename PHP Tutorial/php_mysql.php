<<<<<<< HEAD
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
=======
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
>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
