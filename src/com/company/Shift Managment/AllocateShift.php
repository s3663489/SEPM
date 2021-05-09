<?php

//initialize the session
session_start();
require_once "db_config.php";
//check if logged in, if not, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //potentially need to change the login.html file to login.php!
    header("location: login.html");
    exit;
}
?>

<?php

/*

Define Database credentials.

In MySQL server with default setting:

user is 'root' with no password

 */



$server_name = 'remotemysql.com:3306';

$user_name = 'bVDXbaGLUd';

$db_password = 'f9i1PHT1zO';

$db_name = 'bVDXbaGLUd';



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
        <title>Allocate Shift</title>
        <link rel="stylesheet" href="AllocateShift.css">
    </head>

<body>
<legend>Allocate Shift</legend>
<form name="allocateShift" method="post" action="shifts.php">
<p>
<label for="First Name">Name </label>
<input type="text" name="firstname" id="firstname" required>
</p>
<p>
<label for="Last Name">Last Name</label>
<input type="text" name="lastname" id="lastname" required>
</p>
<p>
<label for="Date">Date<small class="text-muted">
</small>
</label>
<input type="date" name="date" id="date" required>
</p>
<p>
<label for="Start Time">Time<small class="text-muted">
</small
</label>
<input type="time" name="start" id="start" required>
</p>
<p>
<label for="End Time">Time<small class="text-muted">
</small
</label>
<input type="time" name="end" id="end" required>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</body>
</html>

/* parts of this code were adopted and referenced from a tutorial from raghwendra.com */





















?>


