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
                    <a class="nav-link" href="ViewUsers.php">View Users</a>
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
<body>
<table class = "table">
<?php
require_once "../db_config.php";

    $query = "SELECT * FROM users";
    $results = mysqli_query($link, $query) or die(mysqli_error($link));

    if(mysqli_num_rows($results) === 0){
        print "ERROR: No users exist.";
    } else {
        print "<h2>Users:</h2>";
        while($row=mysqli_fetch_array($results))
        {

            print "<tr>
<th>Username</th>
<th scope='col'>First Name</th>
<th scope='col'>Last Name</th>
<th scope='col'>Working Hours Limit</th>
<th scope='col'>Preferred Name</th>
<th scope='col'>Phone Number</th>
<th scope='col'>Address</th>
<th scope='col'>City</th>
<th scope='col'>Postcode</th>
<th scope='col'>State</th>
<th scope='col'>Email</th>
<th scope='col'>ID</th>
</tr>
<tr>
<td>{$row['username']}</td>
 <td>{$row['fname']}</td>
 <td>{$row['lname']}</td>
 <td>{$row['hours']}</td>
<td>{$row['prefname']}</td>
<td>{$row['phonenumber']}</td>
<td>{$row['address']}</td>
<td>{$row['city']}</td>
<td>{$row['postcode']}</td>
<td>{$row['state']}</td>
<td>{$row['email']}</td> 
<td>{$row['ID']}</td> </h3>\n
</tr>";
        }
}
?>
</table>
</body>
</html