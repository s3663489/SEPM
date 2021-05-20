<?php

require_once "../db_config.php";

if (isset($_POST['selectedShift'])){
	
	$id = $_POST['selectedShift'];
	
    $acceptedsql = mysqli_query($link, "update tbl_shifts set fldStatus = 'Accepted' where Id = '$id'")
        or die ('Unable to execute query. '. mysqli_error($link));
		
    if(mysqli_query($link, $sql)) {
	echo "Shift has been accepted.";
    header("location: AllocateShift.php");
	}
	else {
    echo "Error: " . $sql . "<br>" . mysqli_error($link);
	}
}
?>