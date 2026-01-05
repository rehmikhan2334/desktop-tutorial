<?php 

session_start();
$_SESSION["fname"] = "Rehmi";
$_SESSION['lname'] = "Khan";
echo "Names are set in session <br>";




?>
<a href="check_names.php">Check Names</a>