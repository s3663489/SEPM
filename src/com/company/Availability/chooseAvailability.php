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


?>

<!<!doctype html>
<html lang ="en">
	<head>
		<meta http-equiv="Content-type" content="text/html; charset=utf-8">
		<title>Choose Availability</title>
		
	</head>
    
    <body>
	<form id="apply" action="availability.php" method="post">
<section>
	<fieldset>
		<legend>
			<strong>Personal Information</strong> *
		</legend>
<p>First Name* <input id= "firstname" maxlength="20" name="firstname" pattern="^[a-zA-Z\s]{1,20}" required="required" size="20" type="text" /></p>

<p>Last Name* <input id = "lastname" maxlength="20" name="lastname" pattern="^[a-zA-Z ]{1,20}" required="required" size="20" type="text" /></p>

<p>Age* <input id = "age" type="range" value="1" min="1" max="100" oninput="this.nextElementSibling.value = this.value">
<output>1</output>

<p>Address <textarea id = "address" cols="50" name="addresstext" rows="1" placeholder=""></textarea></p>

<p>E-mail*</p>
<p><input id = "email" name="email" required="required" size="30" type="email" value="" placeholder="ex: myname@example.com" /></p>
</fieldset>

<fieldset><legend><strong>Availability</strong> *</legend>

<table width="321">
<tbody>
<tr>
<td>&nbsp;</td>
<td>Start</td>
<td>Finish</td>
</tr>
<tr>
<td>Monday</td>
<td>&nbsp;<select id = "timeMonS" name="timeMonS" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
<td>&nbsp;<select id = "timeMonE" name="timeMonE" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
</tr>
<tr>
<td>Tuesday</td>
<td>&nbsp;<select id = "timeTueS" name="timeTueS" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
<td>&nbsp;<select id="timeTueE" name="timeTueE" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
</tr>
<tr>
<td>Wednesday</td>
<td>&nbsp;<select id="timeWedS" name="timeWedS" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
<td>&nbsp;<select id="timeWedE" name="timeWedE" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
</tr>
<tr>
<td>Thursday</td>
<td>&nbsp;<select id="timeThuS" name="timeThuS" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
<td>&nbsp;<select id="timeThuE" name="timeThuE" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
</tr>
<tr>
<td>Friday</td>
<td>&nbsp;<select id="timeFriS" name="timeFriS" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
<td>&nbsp;<select id="timeFriE" name="timeFriE" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
</tr>
<tr>
<td>Saturday</td>
<td>&nbsp;<select id="timeSatS" name="timeSatS" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
<td>&nbsp;<select id="timeSatE" name="timeSatE" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
</tr>
<tr>
<td>Sunday</td>
<td>&nbsp;<select id="timeSunS" name="timeSunS" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
<td>&nbsp;<select id="timeSunE" name="timeSunE" required="required">
<option value="">Select</option>
<option value="1">01:00</option>
<option value="2">02:00</option>
<option value="3">03:00</option>
<option value="4">04:00</option>
<option value="5">05:00</option>
<option value="6">06:00</option>
<option value="7">07:00</option>
<option value="8">08:00</option>
<option value="9">09:00</option>
<option value="10">10:00</option>
<option value="11">11:00</option>
<option value="12">12:00</option>
<option value="13">13:00</option>
<option value="14">14:00</option>
<option value="15">15:00</option>
<option value="16">16:00</option>
<option value="17">17:00</option>
<option value="18">18:00</option>
<option value="19">19:00</option>
<option value="20">20:00</option>
<option value="21">21:00</option>
<option value="22">22:00</option>
<option value="23">23:00</option>
<option value="24">00:00</option>
</select></td>
</tr>
</tbody>
</table>
</fieldset>

<script>
            function GetSelectedAvailability(){
                var MonS = document.getElementById("timeMonS");
				var TueS = document.getElementById("timeTueS");
				var WedS = document.getElementById("timeWedS");
                var ThuS = document.getElementById("timeThuS");
				var FriS = document.getElementById("timeFriS");
				var SatS = document.getElementById("timeSatS");
				var SunS = document.getElementById("timeSunS");
				
				
				var resultMonS = MonS.options[MonS.selectedIndex].text;
				var resultTueS = TueS.options[TueS.selectedIndex].text;
				var resultWedS = WedS.options[WedS.selectedIndex].text;
				var resultThuS = ThuS.options[ThuS.selectedIndex].text;
				var resultFriS = FriS.options[FriS.selectedIndex].text;
				var resultSatS = SatS.options[SatS.selectedIndex].text;
				var resultSunS = SunS.options[SunS.selectedIndex].text;
				var resultS = resultMonS + ' Monday, ' + resultTueS + ' Tuesday, ' + resultWedS + ' Wednesday, ' + resultThuS + ' Thursday, ' + resultFriS + ' Friday, ' + resultSatS + ' Saturday, ' + resultSunS + ' Sunday.';
								
                

				var MonE = document.getElementById("timeMonE");
				var TueE = document.getElementById("timeTueE");
				var WedE = document.getElementById("timeWedE");
                var ThuE = document.getElementById("timeThuE");
				var FriE = document.getElementById("timeFriE");
				var SatE = document.getElementById("timeSatE");
				var SunE = document.getElementById("timeSunE");

				var resultMonE = MonE.options[MonE.selectedIndex].text;
				var resultTueE = TueE.options[TueE.selectedIndex].text;
				var resultWedE = WedE.options[WedE.selectedIndex].text;
				var resultThuE = ThuE.options[ThuE.selectedIndex].text;
				var resultFriE = FriE.options[FriE.selectedIndex].text;
				var resultSatE = SatE.options[SatE.selectedIndex].text;
				var resultSunE = SunE.options[SunE.selectedIndex].text;
				var resultE = resultMonE + ' Monday, ' + resultTueE + ' Tuesday, ' + resultWedE + ' Wednesday, ' + resultThuE + ' Thursday, ' + resultFriE + ' Friday, ' + resultSatE+ ' Saturday, ' + resultSunE + ' Sunday.';
			

                document.getElementById("start").innerHTML = resultS;
				document.getElementById("end").innerHTML = resultE;
            }
            
        </script>
<button type="button" onclick="GetSelectedAvailability()">Click to confirm Availability</button>
<p id = "start">Start time </p>
<p id = "end">End time </p>
<p><input name="submit" type="submit" value="APPLY" /></p></section></form>
    </body>