/* using this page, we store the data completed in AllocateShift.php into the database */

$con = mysqli_connect("remotemysql.com","bVDXbaGLUd","f9i1PHT1zO","bVDXbaGLUd");

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$date = $_POST['date'];
$start = $_POST['start'];
$end = $_POST['end'];


$rs = mysqli_query($con, $sql);

$sql = "INSERT INTO `tbl_shifts` (`Id`, `fldFirstname`, `fldLastname`, `fldDate`, `fldStart`, `fldEnd`) VALUES ('0', '$firstname', '$lastname', '$date', '$start', '$end')";


if($rs)
{
	echo "Shift has been allocated";
}

?>

/* parts of this code were adopted and referenced from a tutorial from raghwendra.com */