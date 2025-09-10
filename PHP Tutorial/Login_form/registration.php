<?php
include("./connection.php");
$msg = '';

if (isset($_POST['submit'])) {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];
    $user_type = $_POST['user_type'];

    // check if user already exists
    $select = "SELECT * FROM users WHERE email = '$email'";
    $select_user = mysqli_query($conn, $select);

    if (mysqli_num_rows($select_user) > 0) {
        $msg = "User already exists!";
    } else {
        if ($password !== $cpassword) {
            $msg = "Passwords do not match!";
        } else {
            // password ko hash karna better hai (security ke liye)
            $hashed_pass = password_hash($password, PASSWORD_DEFAULT);

            $insert = "INSERT INTO users (name, email, user_type, password) 
                       VALUES ('$name', '$email', '$user_type', '$hashed_pass')";

            if (mysqli_query($conn, $insert)) {
                header("Location: login.php");
                exit();
            } else {
                $msg = "Failed to register: " . mysqli_error($conn);
            }
        }
    }
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Example</title>
    <link rel="stylesheet" href="form1.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css">
    <style>
        .form-group {
            margin-bottom: 10px;
        }
        .msg {
            color: red;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <div class="form">
        <form method="post" class="head">
            <h2>Registration</h2>
            <p class="msg"><?= $msg ?></p>

            <div class="form-group">
                <input type="text" name="name" placeholder="Enter your name" class="form-control" required>
            </div>

            <div class="form-group">
                <input type="email" name="email" placeholder="Enter your email" class="form-control" required>
            </div>

            <div class="form-group">
                <select name="user_type" class="form-select" required>
                    <option value="user">User</option>
                    <option value="admin">Admin</option>
                </select>
            </div>

            <div class="form-group">
                <input type="password" name="password" placeholder="Enter your password" class="form-control" required>
            </div>

            <div class="form-group">
                <input type="password" name="cpassword" placeholder="Confirm password" class="form-control" required>
            </div>

            <button type="submit" name="submit" class="reg-btn">Register Now</button>
            <p>Already have an account? <a href="login.php">Login Now</a></p>
        </form>
    </div>
</body>
</html>
