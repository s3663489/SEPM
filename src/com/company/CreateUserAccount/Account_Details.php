<?php
require_once "db_config.php";

?>

<!<!doctype html>
<html lang ="en">
    <head>
        <meta charset="UTF-8">
        <title>My Profile</title>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css">
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/js/bootstrap.min.js"></script>
            
            <nav class="navbar navbar-expand-lg navbar-light bg-light">
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <ul class="navbar-nav mr-auto">
                        <li class="nav-item active">
                            <a class="nav-link" href=".../welcome.php">Home</a>
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
                            <a class="nav-link" href="../CreateUserAccount/Account_Details.php">Profile</a>
                        </li>

                    </ul>
                    <form class="form-inline my-2 my-lg-0">
                        <button href = "logout.php" class="btn btn-outline-success my-2 my-sm-0" type="logoutbtn">Logout</button>
                    </form>
                </div>
            </nav>

    </head>
    <body>
            
        <div class="jumbotron text-center">
        <h1>My Details</h1>
        </div>
        <div class="container">
            <div class ="row">
                <div class="col-sm-3">
                          <div class="container">
                            
  <div class="panel-group">
    <div class="panel panel-info">
      <div class="panel-heading">       
                 <?php
                    $sql = "SELECT fname, lname, prefname, phonenumber, address, city, postcode, state, email FROM users WHERE id =1";
                    $result = mysqli_query($link, $sql); 
                    if(mysqli_num_rows($result) > 0){
                        while($row = mysqli_fetch_assoc($result)){
                    echo "Name: " . $row["fname"]. " ". $row["lname"]. ""; 
                    }
                }
                ?>
      </div>
        <div class="panel-body">
            <?php
                            $sql = "SELECT fname, lname, prefname, phonenumber, address, city, postcode, state, email FROM users WHERE id =1";
                    $result = mysqli_query($link, $sql); 
                            if(mysqli_num_rows($result) > 0){
                                while($row = mysqli_fetch_assoc($result)){
                                    echo "Preferred Name: " . $row["prefname"] . "<br>";
                                    echo "Phone Number: " . $row["phonenumber"]. "<br>";
                                    echo "Address: " . $row["address"] .", " . $row["city"]. ", " . $row["state"]. "<br>";
                                    echo "Email: " .$row["email"]. "<br>";
                                }
                            }else{
                                    echo "0 results";
                                }?>
        </div>
    </div>
      <button type="button" class ="btn btn-primary">Update My Details</button>
      <a href="ChangePassword.php" class="btn btn-primary">Change My Password</button>
                        <a href="#"></a>
                </div>
            </div>
        </div>  
        

    
  </div>
</div>
    </body>
</html>