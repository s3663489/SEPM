<?php

require_once "../db_config.php";

if (isset($_POST['selectedShift'])){
	
	$id = $_POST['selectedShift'];
	
    $acceptedsql = mysqli_query($link, "update tbl_shifts set fldStatus = 'Accepted' where Id = '$id'")
        or die ('Unable to execute query. '. mysqli_error($link));
		
    if($acceptedsql){
        $status = "success";
        $response = "Shift is accepted";
        header("location: Accept_Shift.php");
    }
    else {
        $status = "failed";
        $response = "There is an error with accepting shift.";
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>