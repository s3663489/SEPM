<?php
   include('db_config.php');
   
   $user_check = $_SESSION['login_user'];
   
   $ses_sql = mysqli_query($link,"select username from users where username = '$user_check' ");
   
   $row = mysqli_fetch_array($ses_sql,MYSQLI_ASSOC);
   
   $login_session = $row['username'];
   
   $_SESSION['loggedin'] = true;
   
   if(!isset($_SESSION['login_user'])){
      header("location:login.php");
      die();
   }
?>