<?php require_once "db_config.php";

if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){

    header("location: login.php");
    exit;
}

$server_name = 'sql6.freesqldatabase.com:3306';

$user_name = 'sql6405522';

$db_password = 'qJCg3ik2gp';

$db_name = 'sql6405522';

$link = mysqli_connect($server_name, $user_name, $db_password, $db_name);

if($link === false){

    die("ERROR: Could not connect. " . mysqli_connect_error());

}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
        <title>View Users</title>
		<h1>View all user accounts</h1>
		<p>Click the button below to show the details of all user accounts.</p>
        <link rel="stylesheet" href="ViewUsers.css">
</head>
<body>
<button type="button" class="seeAllUsersbtn" onclick="showAllUserAccounts()">Show users</button>

<script>
function showAllUserAccounts() {
<?php
 $db = mysqli_connect("localhost", "root","", "Login") or die(mysqli_error($db));
	$q = "select distinct username from Login";
	$results = mysqli_query($db, $q) or die(mysqli_error($db));
	/*Below is supposed to print a list of rows under the "id", "username", "password", and "created_at" in the users table. Still WIP.*/
	
    while($row=mysqli_fetch_array($results))
    {
	print "<h2>Users:</h2>";
	print "<h3>Id: {$row['id']}, Username: {$row['username']}, Password: {$row['password']}, Created at: {$row['created_at']}, /h3>\n";
    }
	
	if(mysqli_num_rows($results) === 0){
    die("ERROR: No users exist." . mysqli_connect_error());
}

if($results === false){
    die("ERROR: Could not connect to database. " . mysqli_connect_error());
}
 ?>
}
</script>
</body>
</html>