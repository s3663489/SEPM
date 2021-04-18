<?php
//initialize the session
session_start();

//Include config file
require_once "db_config.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $id = 2;
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

// search submission ID
    $query = "SELECT * FROM `users` WHERE `ID` = '$id'";

    $sql = "INSERT INTO users (fname, lname, hours, prefname, phonenumber, address, city, postcode, state, email, ID) 
VALUES ('$firstname', '$lastname', $hours, '$prefname', $pnumber, '$address', '$city', $postcode, '$state', '$email', $id)";
    

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
<form action = "CreateUserAccount.php" method = "POST">
    <div class="form-group">
        <h1>Create New Employee</h1>
        <label for="fname">First Name</label>
        <input type="text" class="form-control" name="fname" placeholder="First Name">
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" name="lname" placeholder="Last Name">
    </div>
    <div class="form-group">
        <label for="hours">Working Hours Limit</label>
        <input type="text" class="form-control" name="hours" placeholder="Hours Limit">
    </div>
    <div class="form-group">
        <label for="pname">Preferred Name</label>
        <input type="text" class="form-control" name="pname" placeholder="Preferred Name">
    </div>
    <div class="form-group">
        <label for="pnumber">Phone Number</label>
        <input type="text" class="form-control" name="pnumber" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" name="address" placeholder="13 Nickle St">
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" name="city" placeholder="Willytown">
    </div>
    <div class="form-group">
        <label for="postcode">PostCode</label>
        <input type="text" class="form-control" name="postcode" placeholder="6969">
    </div>
    <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" name="state" placeholder="Unstable">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" name="email" placeholder="resizephallic420@gmail.com">
    </div>

    <button type="submit" class="btn btn-primary">Create New Employee</button>
</form>
</body>
</html>

