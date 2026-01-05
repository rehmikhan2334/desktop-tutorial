<<<<<<< HEAD
<?php 
$host = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Done";
} catch (PDOException $err) {
    echo "Connect failed: " . $err->getMessage();
}
echo "<br>";
$result = $conn->query("show tables");
while($row=$result->fetch(PDO::FETCH_NUM)){
print_r($row);
}
?>
=======
<?php 
$host = "localhost";
$username = "root";
$password = "";

try {
    $conn = new PDO("mysql:host=$host;dbname=college", $username, $password);
    $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connection Done";
} catch (PDOException $err) {
    echo "Connect failed: " . $err->getMessage();
}
echo "<br>";
$result = $conn->query("show tables");
while($row=$result->fetch(PDO::FETCH_NUM)){
print_r($row);
}
?>
>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
