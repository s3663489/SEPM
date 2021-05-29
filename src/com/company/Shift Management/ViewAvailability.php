<?php

/*
Define Database credentials.
In MySQL server with default setting:
user is 'root' with no password
*/



$server_name = 'remotemysql.com:3306';

$user_name = 'bVDXbaGLUd';

$db_password = 'f9i1PHT1zO';

$db_name = 'bVDXbaGLUd';


/* Connect to MySQL database */

$link = mysqli_connect($server_name, $user_name, $db_password, $db_name);



// Check database connection

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

?>

<!<!doctype html>
<html lang ="en">
<head>
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
</head>

<body>
<?php
$sql = "SELECT first_name, last_name, username, avail_dates FROM Availability WHERE first_name = 'Solomon'";
$result = $link->query($sql);

if ($result->num_rows > 0) {
?>
<table class = "table">
    <h2>Availability</h2>
    <tr>
        <th scope="col">First Name</th>
        <th scope = 'col'>Last Name</th>
        <th scope = 'col'>Email</th>
        <th scope ='col'>Available Dates</th>
    </tr>
    <?php
    while($row = mysqli_fetch_array($result)) {
        ?>
        <tr><td><?php echo $row['first_name'] ?></td>
            <td><?php echo $row["last_name"] ?></td>
            <td><?php echo $row["username"]?> </td>
            <td><?php echo $row["avail_dates"]?></td>
        <?php
    }
    } else {
        echo "0 results";
    }
    ?>
</table>
</body>
</html>
