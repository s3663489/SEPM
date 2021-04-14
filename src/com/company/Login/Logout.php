<?php

session_start();

//unset all session variables
$SESSION = array();

session_destroy();

//redirct to login page -- i think this needs to be changed to a PHP file as well
header("location: Login.html");
exit;
?>
