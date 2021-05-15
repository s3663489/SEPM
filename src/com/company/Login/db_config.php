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