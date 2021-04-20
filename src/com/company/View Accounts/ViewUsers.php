<!DOCTYPE html>
<html lang="en">
<head>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
	<link rel="stylesheet" href="ViewUsers.css">
    <meta charset="UTF-8">
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <meta name="viewport" content="width=device-width, initial-scale=1">
        <title>View Users</title>
		<h1>View all user accounts</h1>
		<p>Click the button below to show the details of all user accounts.</p>
        <link rel="stylesheet" href="ViewUsers.css">
</head>
<body>
<form class="well form-horizontal" action = "ViewUsers.php" method = "POST">
<button type="submit" class="btn btn-info">Show users</button>
</form>
</body>
</html>

<?php
require_once "db_config.php";

if($_SERVER["REQUEST_METHOD"] == "POST") {
    $query = "SELECT * FROM users";
	$results = mysqli_query($link, $query) or die(mysqli_error($link));
	
	if(mysqli_num_rows($results) === 0){
    print "ERROR: No users exist.";
	} else {
		print "<h2>Users:</h2>";
		while($row=mysqli_fetch_array($results))
		{
			print "<h3>Username: {$row['username']}, Password: {$row['password']}, First Name: {$row['fname']}, Last Name: {$row['lname']}, Working Hours Limit: {$row['hours']}, Preferred Name: {$row['prefname']}, Phone Number: {$row['phonenumber']}, Address: {$row['address']},
			City: {$row['city']}, Postcode: {$row['postcode']}, State: {$row['state']}, Email: {$row['email']}, ID: {$row['ID']} </h3>\n";
			}
			}
}
?>