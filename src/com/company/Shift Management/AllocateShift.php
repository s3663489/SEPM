<?php
//
////initialize the session
//session_start();
//require_once "db_config.php";
////check if logged in, if not, redirect to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    //potentially need to change the login.html file to login.php!
//    header("location: login.html");
//    exit;
//}
//?>

<?php

/*
Define Database credentials.
In MySQL server with default setting:
user is 'root' with no password
*/


require_once "../db_config.php"

?>

<!<!doctype html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Allocate Shift</title>
    <link rel="stylesheet" href="AllocateShift.css">
        <meta charset="UTF-8">
        <title>Account details</title>
    <script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
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
                        <a class="nav-link" href="../CreateUserAccount/account_details.php">Profile</a>
                    </li>

                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <button href = "logout.php" class="btn btn-outline-success my-2 my-sm-0" type="logoutbtn">Logout</button>
                </form>
            </div>
        </nav>

    </head>

<body>
<div class="container new">
<form class="well form-horizontal" name="allocateShift" method="post" action="shifts.php">
    <fieldset>
        <div class = "form-row">
            <legend><center><h2><b class="text-dark">Allocate Shift</b></h2></center></legend><br>
            <div class = "container-sm rounded p-3 mb-2 bg-light text-dark">
                <div class="form-group">
            <p>
        <label for="First Name">First Name</label>
        <input class="form-control" type="text" name="firstname" id="firstname" required>
    </p>
                </div>
                <div class="form-group">

    <p>
        <label for="Last Name">Last Name</label>
        <input class="form-control" type="text" name="lastname" id="lastname" required>
    </p>
                </div>
                <div class="form-group">
                <p>
        <label for="Date">Date<small class="text-muted">
            </small>
        </label>
        <input class="form-control" type="date" name="date" id="date" required>
    </p>
                </div>
                <div class="form-group">
                <p>
    <label for="Start Time">Start Time<small class="text-muted">
        </small
    </label>
    <input class="form-control" type="time" name="start" id="start" required>
    </p>
                </div>
                <div class="form-group">
                <p>
        <label for="End Time">End Time<small class="text-muted">
            </small
        </label>
        <input class="form-control" type="time" name="end" id="end" required>
    <p>&nbsp;</p>
                </div>
    <p>
        <input type="submit" name="Submit" id="Submit" value="Submit">
    </p>
            </div>
        </div>
    </fieldset>
</form>
</div>
</body>
</html>