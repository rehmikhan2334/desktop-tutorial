<?php 
session_start();

echo "My First Name is : ".$_SESSION['fname'];
echo "<br>";
echo "My Last Name is : ".$_SESSION['lname'] ."<br>";


?>
<a href="unset.php">Unset All Session</a>