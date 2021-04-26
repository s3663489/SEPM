<?php
// Initialize the session
session_start();
require_once "db_config.php";
 
// Check if the user is logged in, if not then redirect him to login page
if(!isset($_SESSION["loggedin"]) || $_SESSION["loggedin"] !== true){
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

$(function()
{
	$('.date-pick')
		.datePicker(
			{
				createButton:false,
				displayClose:true,
				closeOnSelect:false,
				selectMultiple:true
			}
		)
		.bind(
			'click',
			function()
			{
				$(this).dpDisplay();
				this.blur();
				return false;
			}
		)
		.bind(
			'dateSelected',
			function(e, selectedDate, $td, state)
			{
				console.log('You ' + (state ? '' : 'un') // wrap
					+ 'selected ' + selectedDate);
				
			}
		)
		.bind(
			'dpClosed',
			function(e, selectedDates)
			{
				console.log('You closed the date picker and the ' // wrap
					+ 'currently selected dates are:');
				console.log(selectedDates);
			}
		);
});


?>

<!<!doctype html>
<html lang ="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Choose Availability</title>
		
		<!-- firebug lite -->
		<script type="text/javascript" src="firebug/firebug.js"></script>

        <!-- jQuery -->
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.5.2/jquery.min.js"></script>
        
        <!-- required plugins -->
		<script type="text/javascript" src="scripts/date.js"></script>
		<!--[if IE]><script type="text/javascript" src="scripts/jquery.bgiframe.min.js"></script><![endif]-->
        
        <!-- jquery.datePicker.js -->
		<script type="text/javascript" src="scripts/jquery.datePicker.js"></script>
        
        <!-- datePicker required styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="styles/datePicker.css">
		
        <!-- page specific styles -->
		<link rel="stylesheet" type="text/css" media="screen" href="styles/demo.css">
		
		<!-- as github -->
        <link rel="stylesheet" href="Login.css">

        <!-- page specific scripts -->
		<script type="text/javascript" charset="utf-8">
            $(function()
            {
				$('.date-pick')
					.datePicker(
						{
							createButton:false,
							displayClose:true,
							closeOnSelect:false,
							selectMultiple:true
						}
					)
					.bind(
						'click',
						function()
						{
							$(this).dpDisplay();
							this.blur();
							return false;
						}
					)
					.bind(
						'dateSelected',
						function(e, selectedDate, $td, state)
						{
							console.log('You ' + (state ? '' : 'un') // wrap
								+ 'selected ' + selectedDate);
							
						}
					)
					.bind(
						'dpClosed',
						function(e, selectedDates)
						{
							console.log('You closed the date picker and the ' // wrap
								+ 'currently selected dates are:');
							console.log(selectedDates);
						}
					);
            });
		</script>
		
	</head>
    
    <body>
<section>
	<fieldset>
		<legend>
			<strong>Personal Information</strong> *
		</legend>
<p>First Name* <input maxlength="20" name="firstname" pattern="^[a-zA-Z\s]{1,20}" required="required" size="20" type="text" /></p>

<p>Last Name* <input maxlength="20" name="lastname" pattern="^[a-zA-Z ]{1,20}" required="required" size="20" type="text" /></p>

<p>Age* <input type="range" value="1" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
<output>1</output>

<p>Address <textarea cols="50" name="addresstext" rows="1" placeholder=""></textarea></p>

<p>E-mail*</p>
<p><input name="email" required="required" size="30" type="email" value="" placeholder="ex: myname@example.com" /></p>
</fieldset>

<fieldset><legend><strong>Availability</strong> *</legend>
//date picker is learnt by reading Kelvin Luck http://2008.kelvinluck.com/assets/jquery/datePicker/v2/demo/datePickerMultiple.html
<button class="date-pick" type="button">Click to choose Availability</button> 
		</fieldset>
<p><input name="submit" type="submit" value="APPLY" /></p>
    </body>
