<?php

require_once "../db_config.php";

if (isset($_POST['selectedShift'])){
	
	$id = $_POST['selectedShift'];
	
    $rejectedsql = mysqli_query($link, "update tbl_shifts set fldStatus = 'Rejected' where Id = '$id'")
        or die ('Unable to execute query. '. mysqli_error($link));
		
    if($rejectedsql){
        $status = "success";
        $response = "Shift is rejected";
        header("location: Reject_Shift.php");
    }
    else {
        $status = "failed";
        $response = "There is an error with rejecting shift.";
    }

    exit(json_encode(array("status" => $status, "response" => $response)));
}
?>