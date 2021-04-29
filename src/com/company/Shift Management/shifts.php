<?php
//using this page we store the data completed in AllocateShift.php into the database

$con = mysqli_connect("sql6.freesqldatabase.com","sql6405522","qJCg3ik2gp","sql6405522");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$time = $_POST['time'];


$sql = "INSERT INTO `shifts` (`Id`, `first_name`, `last_name`, `date`, `time`) VALUES ('0', '$firstname', '$lastname', '$date', '$time')";

$rs = mysqli_query($con, $sql);
if($rs)
{
echo "Shift has been allocated";
}

?>


