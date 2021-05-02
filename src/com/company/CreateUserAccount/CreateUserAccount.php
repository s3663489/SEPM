<?php
//initialize the session
session_start();

//Include config file
<<<<<<< Updated upstream
require_once "db_config.php";
=======
require_once "../db_config.php";
>>>>>>> Stashed changes

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $firstname = $_POST["fname"];
    $lastname = $_POST["lname"];
    $hours = $_POST["hours"];
    $prefname = $_POST["pname"];
    $pnumber = $_POST["pnumber"];
    $address = $_POST["address"];
    $city = $_POST["city"];
    $postcode = $_POST["postcode"];
    $state = $_POST["state"];
    $email = $_POST["email"];
    $password = '1234';

// search submission ID
//    $query = "SELECT * FROM `users` WHERE `ID` = '$id'";

    $sql = "INSERT INTO users (username, password, fname, lname, hours, prefname, phonenumber, address, city, postcode, state, email) 
<<<<<<< Updated upstream
VALUES ('$email', '$password', '$firstname', '$lastname', $hours, '$prefname', $pnumber, '$address', '$city', $postcode, '$state', '$email')";
    

  if (mysqli_query($link, $sql)) {
       echo "New User Created";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
=======
VALUES ('$email', '$password', '$firstname', '$lastname', '$hours', '$prefname', '$pnumber', '$address', '$city', '$postcode', '$state', '$email')";


    if (mysqli_query($link, $sql)) {
        echo "New User Created";
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($link);
    }
>>>>>>> Stashed changes
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< Updated upstream
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
   <link rel ="stylesheet" href ="createuser.css">
=======
    <meta charset="UTF-8">
    <title>Welcome</title>
    <link rel="stylesheet" href="CreateUserAccount/Login.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link rel ="stylesheet" href ="CreateUserAccount/createuser.css">
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                    <a class="nav-link" href="#">Home</a>
=======
                    <a class="nav-link" href="../../    welcome.php">Home</a>
>>>>>>> Stashed changes
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Calendar</a>
                </li>
<<<<<<< Updated upstream
=======
                <li class="nav-item">
                    <a class="nav-link" href="../CreateUserAccount/CreateUserAccount.php">Create New Employee</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../ViewAccounts/ViewUsers.php">View Users</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="../Shift%20Management/AllocateShift.php">Allocate Shifts</a>
                </li>
>>>>>>> Stashed changes
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
<<<<<<< Updated upstream
                    <a class="nav-link" href="#">Profile</a>
=======
                    <a class="nav-link" href="CreateUserAccount/account_details.php">Profile</a>
>>>>>>> Stashed changes
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>

</head>
<br></br>
<body class = "p-3 mb-2 bg-info text-white">
<<<<<<< Updated upstream

<div class="container new">
<form class="well form-horizontal" onsubmit="return validateForm(this)" action = "CreateUserAccount.php" method = "POST" id = "form">
    <fieldset>

        <div class = "form-row">
<div id = "error"></div>
        <legend><center><h2><b class="text-dark">Create New Employee</b></h2></center></legend><br>

          <div class = "container-sm rounded p-3 mb-2 bg-light text-dark">
              <div class="form-group">
        <label for="firstname">First Name*</label>
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" id="fname" placeholder="First Name" required>
    </div>
              <div class="form-group">
        <label for="lastname">Last Name*</label>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
              </div>
              <div class="form-group">
        <label for="hours">Working Hours Limit*</label>
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="hours" placeholder="Hours Limit" required>
        </div>
              <div class="form-group">
        <label for="pname">Preferred Name</label>

        <input type="text" class="form-control" name="pname" placeholder="Preferred Name">
    </div>
              <div class="form-group">
        <label for="pnumber">Phone Number*</label>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="pnumber" placeholder="Phone Number" required>
    </div>
              <div class="form-group">
        <label for="address">Address*</label>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="address" placeholder="13 Nickle St" required>
    </div>
              <div class="form-group">
        <label for="city" >City*</label>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="city" placeholder="Willytown" required>
    </div>
              <div class="form-group">
        <label for="postcode">PostCode*</label>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="postcode" placeholder="6969" required>
    </div>
              <div class="form-group">
        <label for="state">State*</label>
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="state" placeholder="Unstable" required>
    </div>
              <div class="form-group">
        <label for="email">Email*</label>
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input class="form-control" name="email" pattern = "/^[a-zA-Z0-9.!#$%&'*+/=?^_`{|}~-]+@[a-zA-Z0-9-]+(?:\.[a-zA-Z0-9-]+)*$/" placeholder="resizephallic420@gmail.com" required>
    <div class = "form-group">
        <label for="required">(* = Required Field)</label>
    </div>
              </div>
          </div>
<!--    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> New Employee Created!.</div>-->

    <button type="submit" class="btn btn-primary">Create New Employee</button>
    </fieldset>
</form>
=======

<div class="container new">
    <form class="well form-horizontal" onsubmit="return validateForm(this)" action = "CreateUserAccount.php" method = "POST" id = "form">
        <fieldset>

            <div class = "form-row">
                <div id = "error"></div>
                <legend><center><h2><b class="text-dark">Create New Employee</b></h2></center></legend><br>

                <div class = "container-sm rounded p-3 mb-2 bg-light text-dark">
                    <div class="form-group">
                        <label for="firstname">First Name*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" id="fname" placeholder="First Name" required>
                    </div>
                    <div class="form-group">
                        <label for="lastname">Last Name*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="lname" placeholder="Last Name" required>
                    </div>
                    <div class="form-group">
                        <label for="hours">Working Hours Limit*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="hours" placeholder="Hours Limit" required>
                    </div>
                    <div class="form-group">
                        <label for="pname">Preferred Name</label>

                        <input type="text" class="form-control" name="pname" placeholder="Preferred Name">
                    </div>
                    <div class="form-group">
                        <label for="pnumber">Phone Number*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="pnumber" placeholder="Phone Number" required>
                    </div>
                    <div class="form-group">
                        <label for="address">Address*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="address" placeholder="13 Nickle St" required>
                    </div>
                    <div class="form-group">
                        <label for="city" >City*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="city" placeholder="Willytown" required>
                    </div>
                    <div class="form-group">
                        <label for="postcode">PostCode*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="postcode" placeholder="6969" required>
                    </div>
                    <div class="form-group">
                        <label for="state">State*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
                        <input type="text" class="form-control" name="state" placeholder="Unstable" required>
                    </div>
                    <div class="form-group">
                        <label for="email">Email*</label>
                        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
                        <input class="form-control" name="email" type = "email" placeholder="resizephallic420@gmail.com" required>
                        <div class = "form-group">
                            <label for="required">(* = Required Field)</label>
                        </div>
                    </div>
                </div>
                <!--    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> New Employee Created!.</div>-->

                <button type="submit" class="btn btn-primary">Create New Employee</button>
        </fieldset>
    </form>
>>>>>>> Stashed changes
</div>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/js/bootstrap.bundle.min.js" integrity="sha384-JEW9xMcG8R+pH31jmWH6WWP0WintQrMb4s7ZOdauHnUtxwoG2vI5DkLtS3qm9Ekf" crossorigin="anonymous"></script>
</body>
</html>