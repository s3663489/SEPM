<?php
////initialize the session
session_start();
require_once "db_config.php";

////check if logged in, if not, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    //potentially need to change the login.html file to login.php!
    header("location: Login/login.php");
    exit;
}

$username = $_SESSION["username"];
$password = $_SESSION["password"];
$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
$uname = mysqli_query($link, $query);


?>


<!<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>Welcome</title>
        <link rel="stylesheet" href="CreateUserAccount/Login.css">
            <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<!--            <link rel ="stylesheet" href ="CreateUserAccount/createuser.css">-->
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
                            <a class="nav-link" href="welcome.php">Home</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#">Calendar</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="CreateUserAccount/CreateUserAccount.php">Create New Employee</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="ViewAccounts/ViewUsers.php">View Users</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="Shift%20Management/AllocateShift.php">Allocate Shifts</a>
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
                            <a class="nav-link" href="CreateUserAccount/account_details.php">Profile</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
						<input class="btn btn-outline-success my-2 my-sm-0" type="button" value="Logout" onclick="window.location.href='Login/logout.php';"/>
                    </form>
                </div>
            </nav>

        </head>

    <body>
        <h1> Hi, <b><?php
                while($row = mysqli_fetch_array($uname)) {	
                    echo
                    $row['username'];
                ?></b> Welcome to your profile</h1>

            <?php
            require_once "db_config.php";
			
            $fname = $row["fname"];
			$lname = $row["lname"];
            $aquery = "SELECT * FROM tbl_shifts WHERE fldFirstname = '$fname' AND fldLastname = '$lname' AND fldStatus = 'Accepted'";
			}
            $aresults = mysqli_query($link, $aquery) or die(mysqli_error($link));
            if(mysqli_num_rows($aresults) === 0){
                print "ERROR: No shifts exist.";

            } else {
                print "<h2>Accepted Shifts:</h2>         <table class = \"table\">
            <tr>
                <th scope='col'>First Name</th>
                <th scope='col'>Last Name</th>
                <th scope='col'>Date</th>
                <th scope='col'>Start Time</th>
                <th scope='col'>End Time</th>
            </tr>";
                while($row=mysqli_fetch_array($aresults))
                {
?>

<tr>
<<<<<<< Updated upstream
<td><?php echo $row['fldFirstname'] ?></td>
=======
>>>>>>> Stashed changes
 <td><?php echo $row['fldLastname'] ?></td>
    <td><?php echo $row['fldDate']?></td>
 <td><?php echo $row['fldStart'] ?></td>
<td><?php echo $row['fldEnd'] ?></td>
    <td><a href = 'CancelShift/cancelshift.php?date=<?php echo $row['fldDate']; ?>' class = 'btn btn-danger'>Cancel</a></td>
</tr>
<?php
                }
            }
            ?>
        </table>
            <h2>Allocated Shifts:</h2>

                <?php
                require_once "db_config.php";
				$username = $_SESSION["username"];
				$password = $_SESSION["password"];
				$query = "SELECT * FROM users WHERE username = '$username' AND password = '$password'";
				$uname = mysqli_query($link, $query);
				
				while($row = mysqli_fetch_array($uname)) {	
				$fname = $row["fname"];
				$lname = $row["lname"];
                $pquery = "SELECT * FROM tbl_shifts WHERE fldFirstname = '$fname' AND fldLastname = '$lname' AND fldStatus = 'Pending'";
				}
                $presults = mysqli_query($link, $pquery) or die(mysqli_error($link));
                if(mysqli_num_rows($presults) === 0){
                    echo '<h2>You Have No Allocated Shifts!</h2>>';
                } else {
                    while($row=mysqli_fetch_array($presults))
                    { ?>
        <table class="table">
            <tr>
                <th scope='col'>First Name</th>
                <th scope='col'>Last Name</th>
                <th scope='col'>Date</th>
                <th scope='col'>Start Time</th>
                <th scope='col'>End Time</th>

            </tr>
            <form action="Shift%20Management/shiftStatus.php" method="POST">
                <tr>
                        <td><?php echo $row['fldFirstname']?></td>
                    <input type = 'hidden' value='<?php echo $row['Id'] ?>' name = 'id'>
                    <input type = 'hidden' value='<?php echo $row['fldDate'] ?>' name = 'date'>
                    <td><?php echo $row['fldLastname'] ?></td>
                <td><?php echo $row['fldDate']?></td>
                <td><?php echo $row['fldStart'] ?></td>
                <td><?php echo $row['fldEnd'] ?></td>
                    <td><button onclick="return confirm('Are you sure you want to accept shift?');" name = 'accept' class = 'btn btn-success'>Accept</button>
                  <button onclick="return confirm('Are you sure you want to reject shift?');" name = 'reject' class = 'btn btn-danger'>Reject</button>
                    </td>
                </tr>
            </form>
                <?php
                        }
                }
                ?>

            </table>
            <br><br>
    </body>
</html>