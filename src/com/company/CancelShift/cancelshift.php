<?php

require_once "../db_config.php";

use PHPMailer\PHPMailer\PHPMailer;
if (isset($_GET['date'])) {

    $date = $_GET['date'];
//    $employee = $_GET['name'];

    mysqli_query($link, "delete from tbl_shifts where fldDate >= '$date'")
        or die ('Unable to execute query. '. mysqli_error($link));

    require_once  "../../../PHPMailer/PHPMailer.php";
    require_once  "../../../PHPMailer/SMTP.php";
    require_once  "../../../PHPMailer/Exception.php";

    $mail = new PHPMailer();

    $mail->isSMTP();
    $mail -> Host = "smtp.gmail.com";
    $mail -> SMTPAuth = true;
    $mail -> Username = 'secphpmail@gmail.com';
    $mail -> Password = 'Esper584';
    $mail -> Port = 465;
    $mail -> SMTPSecure = 'ssl';

    //email settings
    $mail -> isHTML(true);
    $mail -> setFrom("s3663489@student.rmit.edu.au", "test");
    $mail ->addAddress("s3663489@student.rmit.edu.au");
    $mail -> Subject = ("Shift has been cancelled");
    $mail -> Body = "a shift has been cancelled for '$date'";

    if($mail-> send()){
        $status = "success";
        $response = "Email is sent";
        header("location: ../welcome.php");
    }
    else {
        $status = "failed";
        $response = "Someting is wrong: <br>" .$mail->ErrorInfo;
    }

    exit(json_encode(array("status" => $status, "response" => $response)));

}