<?php
session_start();
require_once "db_config.php";
//unset all session variables
$SESSION = array();

session_destroy();

header("location: Login.php");
exit;
?>
