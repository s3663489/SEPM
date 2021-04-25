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
<label for="Date">Date<small class="text-muted"> write in the format: dd/mm/yyyy
</small>
</label>
<input type="text" name="date" id="date" required>
</p>
<p>
<label for="Time">Time<small class="text-muted"> write in the format: 00:00 to 23:59
</small
</label>
<input type="text" name="time" id="time" required>
</p>
<p>&nbsp;</p>
<p>
<input type="submit" name="Submit" id="Submit" value="Submit">
</p>
</form>
</body>
</html>

/* parts of this code were adopted from a tutorial from raghwendra.com */

/* Old version of the form


  <div class="row">
<div class="col-md-6">
<form method="post">
<div class="form-group">
<label for="date">Date<small class="text-muted"> write in the format: dd/mm/yyyy, for example today is <?= date(DATE_FORMAT); ?>
</small>
</label>
<input type="text" class="form-control" id="date" name="date"
<?php displayValue($_POST, 'date'); ?> />
<?php displayError($errors, 'date'); ?>
</div>

<div class="form-group">
<label for="hours">Duration: (hours)<small class="text-muted"> minimum <?= HOURS_MINIMUM; ?> hours, maximum <?= HOURS_MAXIMUM; ?> hours</small>
</label>
<input type="text" class="form-control" id="hours" name="hours"
<?php displayValue($_POST, 'hours'); ?> />
<?php displayError($errors, 'hours'); ?>
</div>


<div class="form-group">
<label for="name">First Name
</label>
<input type="text" class="form-control" id="name" name="name"
<?php displayValue($_POST, 'name'); ?> />
<?php displayError($errors, 'name'); ?>
</div>

<div class="form-group">
<label for="lastname">Last Name
</label>
<input type="lastname" class="form-control" id="lastname" name="lastname"
<?php displayValue($_POST, 'lastname'); ?> />
<?php displayError($errors, 'lastname'); ?>
</div>

<button type="submit" class="btn btn-primary mr-5" name="allocateShift" value="allocateShift">
Allocate Shift
</button>
<button>
<a href="category.php?category=<?= $category['key']; ?>" class="link">Cancel</a>
</button>
</form>
</div>
</div> */


















?>


