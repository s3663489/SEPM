<?php

//initialize the session
//session_start();
//require_once "db_config.php";
//check if logged in, if not, redirect to login page
//if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //potentially need to change the login.html file to login.php!
//    header("location: login.php");
//    exit;
//}
?>

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
        <meta charset="UTF-8">
        <title>Allocated Shifts</title>
        <link rel="stylesheet" href="Login.css">
    </head>

      <body>
	  <?php
	  $con = mysqli_connect("remotemysql.com","bVDXbaGLUd","f9i1PHT1zO","bVDXbaGLUd");
      $sql = "SELECT * FROM tbl_shifts";
      $result = $con->query($sql);

      if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
              echo "<br> First Name: ". $row["fldFirstname"]. " - Last Name: ". $row["fldLastname"]. "- Date : ". $row["fldDate"]. "- Start : ". $row["fldStart"]. "- End : ". $row["fldEnd"]. "- Status : ". $row["fldStatus"]. "<br>";
          }
      } else {
          echo "0 results";
      }
	  ?>
     </body>
        </html>