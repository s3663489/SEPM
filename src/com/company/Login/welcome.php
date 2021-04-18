<?php
session_start();
require_once "db_config.php";
//check if logged in, if not, redirect to login page
if(!isset($_SESSION['loggedin']) || $_SESSION['loggedin'] !== true){
    //==========================THIS IS TRIGGERING UPON LOGGING IN!=====================================
    header("location: login.php");
    exit;
}

/*
$server_name = 'sql6.freesqldatabase.com:3306';

$user_name = 'sql6405522';

$db_password = 'qJCg3ik2gp';

$db_name = 'sql6405522';

$link = mysqli_connect($server_name, $user_name, $db_password, $db_name);
 * */
 
// Check database connection

if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
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
