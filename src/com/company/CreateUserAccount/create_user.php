<?php

require_once "db_config.php";

$id = 1;
$firstname = $_POST['fname'];
$lastname = $_POST['lname'];
$hours = $_POST['hours'];
$prefname = $_POST['pname'];
$pnumber = $_POST['pnumber'];
$address = $_POST['address'];
$city = $_POST['city'];
$postcode = $_POST['postcode'];
$state = $_POST['state'];
$email = $_POST['email'];
// search submission ID
$query = "SELECT * FROM `users` WHERE `ID` = '$id'";
$sqlsearch = mysql_query($query);
$resultcount = mysql_numrows($sqlsearch);

if ($resultcount > 0) {
    mysql_query(
        "UPDATE `users` SET
        `First Name` = '$firstname',
         `Last Name` = '$lastname',
        `Hours` = '$hours',
        `Pref Name` = '$prefname',
        `Phone Number` = '$pnumber',
        `Address` = '$address'
        `City` = '$city'
        `Post Code` = '$postcode'
        `State` = '$state'
        `Email` = '$email'
        WHERE `ID` = '$id'"
    ) or die(mysql_error());
} else {
    mysql_query(
        "INSERT INTO `users` (First Name, Last Name, Hours, Pref Name, Phone Number, Address, City, Post Code, State, Email, ID)
        VALUES ('$firstname', '$lastname', '$hours','$prefname', '$email', '$prefname', '$pnumber', '$address'
        , '$city', '$postcode', '$state', '$email', '$id')"
    ) or die(mysql_error());
}

php?>
