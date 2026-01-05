<?php
session_start(); // session start

include("./connection.php");

$msg = ''; // default empty

if(isset($_POST['submit'])){
    $email = $_POST['email'];
    $password = $_POST['password'];

    $select1 = "SELECT * FROM users WHERE email='$email' AND password='$password'";
    $select_user = mysqli_query($conn, $select1);

    if(mysqli_num_rows($select_user) > 0){
        $row1 = mysqli_fetch_assoc($select_user);

        if($row1['user_type'] == 'user'){
            $_SESSION['user'] = $row1['email'];
            $_SESSION['id'] = $row1['id'];
            header('location:user.php');
            exit;
        }
        elseif($row1['user_type'] == 'admin'){
            $_SESSION['admin'] = $row1['email'];
            $_SESSION['id'] = $row1['id'];
            header('location:admin.php');
            exit;
        }
    } else {
        // sirf jab record na mile tab msg show hoga
        $msg = 'Incorrect email or password!';
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="form1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .form-group { margin-bottom: 10px; }
        .msg { color: red; font-weight: bold; }
    </style>
</head>
<body>
    <div class="form">
        <form method="post" class="head">
            <h2>Login</h2>
            <!-- message sirf galat hone par hi show hoga -->
            <?php if(!empty($msg)) { ?>
                <p class="msg"><?php  $msg; ?></p>
            <?php } ?>

            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="reg-btn">Login Now</button>
            <p>Don't have an account? <a href="registration.php">Register Now</a></p>
        </form>
    </div>
</body>
</html>
