/* using this page we store the data completed in AllocateShift.php into the database */

$con = mysqli_connect("sql6.freesqldatabase.com","sql6405522","qJCg3ik2gp","sql6405522");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$time = $_POST['time'];


$rs = mysqli_query($con, $sql);

$sql = "INSERT INTO `tbl_shifts` (`Id`, `fldFirstname`, `fldLastname`, `fldDate`, `fldTime`) VALUES ('0', '$firstname', '$lastname', '$date', '$time')";


if($rs)
{
	echo "Shift has been allocated";
}

?>

/* parts of this code were adopted from a tutorial from raghwendra.com */