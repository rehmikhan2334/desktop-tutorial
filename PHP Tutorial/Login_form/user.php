<<<<<<< HEAD
<?php 
include("./connection.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body>
<div class="user-page">
    <h2>Welcome to user page!</h2>
    <p>User : <span><?php echo $_SESSION['user'];?></span></p>
    <a href="logout.php"><button class="btn fon-weight-bold">Logout</button></a>
</div>    
</body>
=======
<?php 
include("./connection.php");
session_start();

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
  <link rel="stylesheet" href="form1.css">
</head>
<body>
<div class="user-page">
    <h2>Welcome to user page!</h2>
    <p>User : <span><?php echo $_SESSION['user'];?></span></p>
    <a href="logout.php"><button class="btn fon-weight-bold">Logout</button></a>
</div>    
</body>
>>>>>>> 2327da399a8fc7486d103895b98ec7f7a0e56f5e
</html>