<?php
//using this page we store the data completed in AllocateShift.php into the database

require_once "../db_config.php";
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$start = $_POST['start'];
$end = $_POST['end'];




$sql = "INSERT INTO `tbl_shifts` (`Id`, `fldFirstname`, `fldLastname`, `fldDate`, `fldStart`, `fldEnd`) VALUES ('0', '$firstname', '$lastname', '$date', '$start', '$end')";
x`


if(mysqli_query($link, $sql))
{
    header("location: AllocateShift.php");
    echo "Shift has been allocated";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
}

?>