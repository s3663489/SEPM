<?php


require_once "../db_config.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET['fldDate'])) {
    $date = $_GET['fldDate'];
    $name = $_GET['name'];
    $sql = "delete from tbl_shifts where fldDate = '$date' and fldFirstname = '$name'";
    mysqli_query($link, $sql)
    or die ('Unable to execute query. ' . mysqli_error($link));


    header('location: ViewShifts.php');



}