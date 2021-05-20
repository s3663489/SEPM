<?php
////initialize the session
session_start();
require_once "../db_config.php";

////check if logged in, if not, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    //potentially need to change the login.html file to login.php!
    header("location: ../Login/login.php");
    exit;
}

$username = $_SESSION["username"];
$password = $_SESSION["password"];
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$uname = mysqli_query($link, $query);
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel ="stylesheet" href ="createuser.css">
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <meta charset="UTF-8">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item active">
                    <a class="nav-link" href="../welcome.php">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Calendar</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../CreateUserAccount/CreateUserAccount.php">Create New Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ViewAccounts/ViewUsers.php">View Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Shift%20Management/AllocateShift.php">Allocate Shifts</a>
                </li>
                <li class="nav-item dropdown">
                    <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                        Dropdown
                    </a>
                    <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="#">Action</a>
                        <a class="dropdown-item" href="#">Another action</a>
                        <div class="dropdown-divider"></div>
                        <a class="dropdown-item" href="#">Something else here</a>
                    </div>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../CreateUserAccount/account_details.php">Profile</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <input class="btn btn-outline-success my-2 my-sm-0" type="button" value="Logout" onclick="window.location.href='../Login/logout.php';"/>
            </form>
        </div>
    </nav>
</head>
<body>
<form class="well form-horizontal" action="Rejected_Shift.php" method = "POST" onsubmit="return confirm('Are you sure you want to reject shift?');">
<label for="shifts">Choose a shift to reject from dropdown:</label>
<select name="selectedShift">
<?php
		require_once "../db_config.php";
		
		while($row = mysqli_fetch_array($uname)) {
			$fname = $row["fname"];
			$lname = $row["lname"];
			$query = "SELECT * FROM tbl_shifts WHERE fldFirstname = '$fname' OR fldLastname = '$lname' && fldStatus = 'Pending'";
		}
		$results = mysqli_query($link, $query) or die(mysqli_error($link));
		if(mysqli_num_rows($results) === 0){
                echo '<option selected="selected">Error. No shifts found.</option>';
            } else {
		while($row=mysqli_fetch_array($results))
		{
        // Each row of array from tbl_shifts.
        $shifts = array("{$row['fldFirstname']} {$row['fldLastname']} allocated at {$row['fldDate']} from {$row['fldStart']} to {$row['fldEnd']}");
		// Iterating through the row of array and putting the id of each row in as an option value to be used for later.
        foreach($shifts as $item){
            echo "<option value='{$row['Id']}'>$item</option>";
			}
			}
		}
        ?>
  </select>
  <br><br>
  <input type="submit" name="submit" class="btn btn-primary" value="Reject Shift"/>
</form>
</body>
</html>