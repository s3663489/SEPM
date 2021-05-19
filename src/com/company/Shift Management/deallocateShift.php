<?php


require_once "../db_config.php";

use PHPMailer\PHPMailer\PHPMailer;

if (isset($_GET['date'])) {

    $date = $_GET['date'];
    $name = $_GET['name'];

    mysqli_query($link, "delete from tbl_shifts where fldDate >= '$date'")
    or die ('Unable to execute query. ' . mysqli_error($link));
    header('location: ViewShifts.php');



}