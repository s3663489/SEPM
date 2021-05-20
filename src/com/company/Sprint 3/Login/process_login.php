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
 ?>
 <!DOCTYPE html>
 <html> 
 <head> <title>Login Page</title>
 <meta charset="UTF-8"> </head>
 <body>
 <h3>You have logged in</h3> 
 <a href="../welcome.php">Go to homepage</a>
 <?php 
 } 
 else {
 print "<br>";
 print "<h3>Either you have not registered or your username or password is wrong!</h3>"; 
 
 print " <a href= registration.html> Click here to register </a>";
  print "<br>";
  print "<br>";
 print " <a href= login_form.html> Click here to Login again </a>";
 
 
 }
 ?>
 </body> 
 </html>