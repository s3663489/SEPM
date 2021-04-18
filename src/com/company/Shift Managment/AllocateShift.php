<?php require_once "db_config.php";

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: login.php");
    exit;
}

$server_name = 'sql6.freesqldatabase.com:3306';

$user_name = 'sql6405522';

$db_password = 'qJCg3ik2gp';

$db_name = 'sql6405522';

$link = mysqli_connect($server_name, $user_name, $db_password, $db_name);

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
</div>


















?>


