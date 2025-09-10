<?php 
// ak ya trika h file ko get krny ka 
// echo "This is php file";

// or dosra hm apni marzi sy kuch likh skty h 

// echo "user name is " . $_GET['user_name'];
// echo "<br>";
// echo "user password is " . $_GET['user_password'];


// third Example
if (isset($_GET['user_name']) && isset($_GET['user_password'])) {
    echo "user name is " . $_GET['user_name'];
    echo "<br>";
    echo "user password is " . $_GET['user_password'];
} else {
    echo "No data passed!";
}


?>
