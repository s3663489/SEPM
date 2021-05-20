<?php
 $username = $_POST['username'];
 $password = $_POST['password'];
 
 //connect to the server
 require_once "../db_config.php";
 //run the query
 $q = "select * from users where username = '$username' and password = '$password'"; 
 
 $result = mysqli_query($link, $q); 
 
 if(mysqli_num_rows($result) > 0) 
 { 
 session_start();
 $_SESSION['loggedin'] = true;
 $_SESSION['username'] = $username;
 $_SESSION['password'] = $password; 
 header("location: ../welcome.php");
 } 
 else {
 print "<br>";
 print "<h2>Error.</h2>";  
 print "<h3>You are either not registered or your username and/or password is wrong!</h3>"; 
 
 
 }
 ?>