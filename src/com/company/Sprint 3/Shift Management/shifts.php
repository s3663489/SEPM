<?php
session_start();
require_once "../db_config.php";

$username = $_SESSION["username"];
$password = $_SESSION["password"];
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$uname = mysqli_query($link, $query);
//using this page we store the data completed in AllocateShift.php into the database

require_once "../db_config.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$start = $_POST['start'];
$end = $_POST['end'];


while($row = mysqli_fetch_array($uname)) {
	$usname = $row["username"];
	$sql = "INSERT INTO `tbl_shifts` (`Id`, `username`, `fldFirstname`, `fldLastname`, `fldDate`, `fldStart`, `fldEnd`, `fldStatus`) VALUES ('0', '$usname', '$firstname', '$lastname', '$date', '$start', '$end', 'Pending')";
	}


if(mysqli_query($link, $sql))
{
    header("location: AllocateShift.php");
    echo "Shift has been allocated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>