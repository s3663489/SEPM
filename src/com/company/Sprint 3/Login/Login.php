<?php
session_start();
require_once "../db_config.php";

//check if logged in via checking if array exists and, if yes, redirect to home page user is already logged in.
if(array_key_exists('loggedin', $_SESSION) && !empty($_SESSION['loggedin'])) {
    //potentially need to change the login.html file to login.php!
    header("location: ../welcome.php");
    exit;
}
 ?>

<!DOCTYPE html>
<html lang="en">
<head>
    <form action="process_login.php" method="post">
        <link rel="stylesheet" href="Login.css">

        <div class="imgcontainer">
            <img src="img_avatar2.png" alt="Avatar" class="avatar">
        </div>

        <div class="container">
            <label for="usw"><b>Username</b></label>
            <input type="username" placeholder="Enter Username" name="username" required>

            <label for="psw"><b>Password</b></label>
            <input type="password" placeholder="Enter Password" name="password" required>

            <button type="submit">Login</button>
            <label>
                <input type="checkbox" checked="checked" name="remember"> Remember me
            </label>
        </div>

        <div class="container" style="background-color:#f1f1f1">
            <button type="button" class="cancelbtn">Cancel</button>
            <span class="psw">Forgot <a href="#">password?</a></span>
        </div>
    </form>
</head>
<body>

</body>
</html>