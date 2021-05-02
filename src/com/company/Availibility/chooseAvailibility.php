<?php
// Initialize the session
session_start();
require_once "../db_config.php";

//// Check if the user is logged in, if not then redirect him to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
//    header("location: login.php");
//    exit;
//}


if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["firstname"];
    $lastname = $_POST["lastname"];
    $email = $_POST["email"];
    $dates = $_POST["myrosterdate"];
// search submission ID

    $sql = "INSERT INTO Availability (first_name, last_name, email, avail_dates) 
VALUES ('$firstname', '$lastname', '$email', '$dates')";


    if (mysqli_query($link, $sql)) {
        echo "Availability Registered";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
}

?>



<!<!doctype html>
<html lang ="en">
<head>
    <meta charset="UTF-8">
    <title>Register Availbility</title>
    <meta charset="UTF-8">
    <title>Account details</title>
    <script type="text/javascript" src="https://code.jquery.com/jquery-1.11.3.min.js"></script>

    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/js/bootstrap-datepicker.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/bootstrap-datepicker/1.4.1/css/bootstrap-datepicker3.css"/>
    <script type="text/javascript">

        $(document).ready(function(){
            var date_input=$('input[name="myrosterdate"]'); //our date input has the name "myrosterdate"
            var container=$('.bootstrap-iso form').length>0 ? $('.bootstrap-iso form').parent() : "body";
            var options={
                multidate:true,
                format: 'yyyy-mm-dd',
                container: container,
                todayHighlight: true,
                autoclose: false,
            };
            date_input.datepicker(options);
        })
    </script>
    <link rel="stylesheet" href="availability.css">
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
                <button href = "logout.php" class="btn btn-outline-success my-2 my-sm-0" type="logoutbtn">Logout</button>
            </form>
        </div>
    </nav>

</head>

<body class = "p-3 mb-2 bg-info text-white">

<div class="container new">

<legend>Register Availability</legend>
<form class="well form-horizontal" name="allocateShift" method="post" action="chooseAvailibility.php">
    <div class = "form-group">
    <p>
        <label for="First Name">First Name</label>
        <input class="form-control" type="text" name="firstname" id="firstname" required>
    </p>
    </div>
    <div class = "form-group">
    <p>
        <label for="Last Name">Last Name</label>
        <input class="form-control" type="text" name="lastname" id="lastname" required>
    </p>
    </div>
    <div class = "form-group">

    <p>
        <label for="email">Email</label>
        <input class="form-control" type="email" name="email" id="email" required>
    </p>
    </div>
    <p>
    <div class="form-group"> <!-- Date input -->
        <label class="control-label" for="date">Date</label>
        <input class="form-control" id="myrosterdate" name="myrosterdate" placeholder="MM/DD/YYY" type="text"/>
    </div>
    <div class="form-group"> <!-- Submit button -->
        <button class="btn btn-primary " name="submit" type="submit">Submit</button>
    </div>    <p>
        <input type="submit" class = "btn btn-success" name="Submit" id="Submit" value="Submit">
    </p>
    </div>
</form>
</div>

</body>
</html>