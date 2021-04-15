<?php
// Initialize the session
session_start();
require_once "db_config.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    header("location: login.php");
    exit;
}
?>

<?php

/*

Define Database credentials.

In MySQL server with default setting:

user is 'root' with no password

*/



$server_name = 'sql6.freesqldatabase.com:3306';

$user_name = 'sql6405522';

$db_password = 'qJCg3ik2gp';

$db_name = 'sql6405522';



/* Connect to MySQL database */

$link = mysqli_connect($server_name, $user_name, $db_password, $db_name);



// Check database connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

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
