<?php
// Initialize the session
session_start();
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<!<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>Account details</title>
        <link rel="stylesheet" href="Login.css">
    </head>
    
    <body>
        <p> Hi, <b><?php echo
        htmlspecialchars($_SESSION["username"]); ?></b></p>
        <p> <?php echo htmlspecialchars($_SESSION["address"]) ?></p>
        <p> <?php echo htmlspecialchars($_SESSION["phone_numbr"]) ?></p>
    </body>
</html>
