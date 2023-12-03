<?php
    require 'config.php';
    if(!empty($_SESSION["id"])) {
        header("Location: index.php");
    }
    if(isset($_POST["submit"])) {
        $name = $_POST["name"];
        $username = $_POST["username"];
        $email = $_POST["email"];
        $password = $_POST["password"];
        $password_confirm = $_POST["password_confirm"];

        $duplicate = mysqli_query($conn, "SELECT * FROM tb_user WHERE username = '$username' OR email = '$email'")
            or die(mysqli_error($conn));

        if(mysqli_num_rows($duplicate) > 0) {
            echo "<script>alert('Username or Email already exists!');</script>";
        } else {
            if($password != $password_confirm) {
                echo "<script>alert('Password does not match!');</script>";
            } else {
                $query = "INSERT INTO tb_user (name, username, email, password) VALUES ('$name', '$username', '$email', '$password')";
                mysqli_query($conn, $query) or die(mysqli_error($conn));

                echo "<script>alert('Registration Success!');</script>";
                header("Location: index.html");
            }
        }
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Registration</title>
</head>
<body>
    <h2>Registration</h2>
    <form class="" action="process_registration.php" method="post" autocomplete="off">
        <label for="name">Name</label>
        <input type="text" name="name" id="name" required value=""><br>
        <label for="username">Username</label>
        <input type="text" name="username" id="username" required value=""><br>
        <label for="email">Email</label>
        <input type="text" name="email" id="email" required value=""><br>
        <label for="password">Password</label>
        <input type="password" name="password" id="password" required value=""><br>
        <label for="password_confirm">Confirm password</label>
        <input type="password" name="password_confirm" id="password_confirm" required value=""><br>
        
        <button type="submit" name="submit">Register</button>
    </form><br>
    <a href="process_login.php">Login</a>
</body>
</html>
