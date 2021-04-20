<?php
/*
Define Database credentials.
In MySQL server with default setting:
user is 'root' with no password
*/

$server_name = 'sql6.freesqldatabase.com:3306';
$user_name = 'sql6405522';
$db_password = 'qJCg3ik2gp';
$db_name = 'sql6405522';

/* Connect to MySQL database */
$link = mysqli_connect($server_name, $user_name, $db_password, $db_name);

// Check database connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
?>