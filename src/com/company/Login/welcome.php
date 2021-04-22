<?php
session_start();
require_once "db_config.php";
include('session.php');
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
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
    </head>
    
    <body>
        <div class="jumbotron text-center">
        <h1> Hi, <b><?php echo
        htmlspecialchars($_SESSION["login_user"]); ?></b> Welcome to your profile</h1>
        </div>
        
        <nav class="navbar navbar-default">
            <div class="container fluid">
                <div class="navbar-header">
                    <a class="navbar-brand" href="#">Company</a>
                </div>
            <ul class ="nav navbar-nav">
                <li class="active"><a href="welcome.php">Home</a></li>
                <li><a href="account_details.php">Account Details</a></li>
                <li><a href="#">Availability</a></li>
                <li><a href="#">Rostered Shifts</a></li>
            </ul>
            </div>
        </nav>
        <a href="logout.php" button type="button" button onclick="alertFunction()" class="btn btn-danger">logout</a>
    
        <script>
            function alertFunction(){
                alert("You are now logged out.");
            }
        </script>
    </p>
    </body>
</html>
