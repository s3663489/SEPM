<?php

//initialize the session
session_start();
require_once "db_config.php";
//check if logged in, if not, redirect to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
    //potentially need to change the login.html file to login.php!
    header("location: login.php");
    exit;
}
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
      $sql = "SELECT firstname, lastname, date, start, end FROM tbl_shifts";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {

          while($row = $result->fetch_assoc()) {
              echo "You have a new shift! Check Below:";
              echo "<br> First Name: ". $row["firstname"]. " - Last Name: ". $row["lastname"]. "- Date : ". $row["date"]. "- Start : ". $row["start"]. "- End : ". $row["end"]. "<br>";
          }
      } else {
          echo "You have no new shifts";
      }

     </body>
        </html>