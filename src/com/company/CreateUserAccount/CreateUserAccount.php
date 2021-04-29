<!DOCTYPE html>
<html lang="en">
<head>
<<<<<<< Updated upstream
=======
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
                    <a class="nav-link" href="CreateUserAccount.php">Create New Employee</a>
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
                    <a class="nav-link" href="account_details.php">Profile</a>
                </li>

            </ul>
            <form class="form-inline my-2 my-lg-0">
                <button href = "logout.php" class="btn btn-outline-success my-2 my-sm-0" type="logoutbtn">Logout</button>
            </form>
        </div>
    </nav>

>>>>>>> Stashed changes
</head>
<body>
<form>
    <div class="form-group">
        <h1>Create New Employee</h1>
        <label for="fname">First Name</label>
        <input type="text" class="form-control" id="fname" placeholder="First Name">
    </div>
    <div class="form-group">
        <label for="lname">Last Name</label>
        <input type="text" class="form-control" id="lname" placeholder="Last Name">
    </div>
    <div class="form-group">
        <label for="hours">Working Hours Limit</label>
        <input type="text" class="form-control" id="hours" placeholder="Hours Limit">
    </div>
    <div class="form-group">
        <label for="pname">Preferred Name</label>
        <input type="text" class="form-control" id="pname" placeholder="Preferred Name">
    </div>
    <div class="form-group">
        <label for="pnumber">Phone Number</label>
        <input type="text" class="form-control" id="pnumber" placeholder="Phone Number">
    </div>
    <div class="form-group">
        <label for="address">Address</label>
        <input type="text" class="form-control" id="address" placeholder="13 Nickle St">
    </div>
    <div class="form-group">
        <label for="city">City</label>
        <input type="text" class="form-control" id="city" placeholder="Willytown">
    </div>
    <div class="form-group">
        <label for="postcode">PostCode</label>
        <input type="text" class="form-control" id="postcode" placeholder="6969">
    </div>
    <div class="form-group">
        <label for="state">State</label>
        <input type="text" class="form-control" id="state" placeholder="Unstable">
    </div>
    <div class="form-group">
        <label for="email">Email</label>
        <input type="email" class="form-control" id="email" placeholder="resizephallic420@gmail.com">
    </div>

    <button type="submit" class="btn btn-primary">Create New Employee</button>
</form>
</body>
</html>

<?php

php?>
