<?php
//initialize the session
session_start();

//Include config file
require_once "db_config.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = 3;
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
    $query = "SELECT * FROM `users` WHERE `ID` = '$id'";

    $sql = "INSERT INTO users (username, password, fname, lname, hours, prefname, phonenumber, address, city, postcode, state, email, ID) 
VALUES ('$email', '$password', '$firstname', '$lastname', $hours, '$prefname', $pnumber, '$address', '$city', $postcode, '$state', '$email', $id)";
    

  if (mysqli_query($link, $sql)) {
       echo "New User Created";
 } else {
     echo "Error: " . $sql . "<br>" . mysqli_error($link);
  }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script type="text/javascript" src="createuseraccount.js"></script>
    <link rel="stylesheet" href="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/css/bootstrapValidator.min.css"/>
    <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jquery.bootstrapvalidator/0.5.2/js/bootstrapValidator.min.js"></script>
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
                    <a class="nav-link" href="#">Home</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Calendar</a>
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
                    <a class="nav-link" href="#">Profile</a>
                </li>
            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Logout</button>
            </form>
        </div>
    </nav>
</head>
<body>
<div class="container">
<form class="well form-horizontal" action = "CreateUserAccount.php" method = "POST">
    <fieldset>
    <div class="form-group">
        <legend><center><h2><b>Create New Employee</b></h2></center></legend><br>
        <label for="fname" class="col-md-4 control-label">First Name</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>

        <input type="text" class="form-control" name="fname" placeholder="First Name">
    </div>
</div>
    </div>
    <div class="form-group">
        <label for="lname" class="col-md-4 control-label">Last Name</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
        </div>
    </div>
    <div class="form-group">
        <label for="hours" class="col-md-4 control-label">Working Hours Limit</label>
            <div class="col-md-4 inputGroupContainer">
                <div class="input-group">
                    <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="hours" placeholder="Hours Limit">
    </div>
            </div>
        </div>
    <div class="form-group">
        <label for="pname" class="col-md-4 control-label">Preferred Name</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
        <input type="text" class="form-control" name="pname" placeholder="Preferred Name">
    </div>
        </div>
    </div>
    <div class="form-group">
        <label for="pnumber" class="col-md-4 control-label">Phone Number</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="pnumber" placeholder="Phone Number">
    </div>
        </div>
    </div>
    <div class="form-group">
        <label for="address" class="col-md-4 control-label">Address</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="address" placeholder="13 Nickle St">
    </div>
        </div>
    </div>
    <div class="form-group">
        <label for="city" class="col-md-4 control-label">City</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="city" placeholder="Willytown">
    </div>
        </div>
    </div>
    <div class="form-group">
        <label for="postcode" class="col-md-4 control-label">PostCode</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="postcode" placeholder="6969">
    </div>
        </div>
    </div>
    <div class="form-group">
        <label for="state" class="col-md-4 control-label">State</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
                <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input type="text" class="form-control" name="state" placeholder="Unstable">
    </div>
        </div>
    </div>
    <div class="form-group">
        <label for="email" class="col-md-4 control-label">Email</label>
        <div class="col-md-4 inputGroupContainer">
            <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input type="email" class="form-control" name="email" placeholder="resizephallic420@gmail.com">
    </div>
        </div>
    </div>
    <div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> New Employee Created!.</div>

    <button type="submit" class="btn btn-primary">Create New Employee</button>
    </fieldset>
</form>
</div>
</body>
</html>

