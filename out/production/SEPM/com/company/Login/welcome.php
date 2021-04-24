<?php

//initialize the session
session_start();
require_once "db_config.php";
//check if logged in, if not, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //potentially need to change the login.html file to login.php!
    header("location: login.php");
    exit;
}
?>

<!<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="Login.css">
    </head>
    
    <body>
        <h1> Hi, <b><?php echo
        htmlspecialchars($_SESSION["username"]); ?></b> Welcome to your profile</h1>
        <p> <a href="account_details.php">Account details</a>
        <p> Availability goes here</p>
        <a href="logout.php" class="logoutbtn">logout</a>
    </p>
    </body>
</html>
