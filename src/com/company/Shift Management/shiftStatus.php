<?php

require_once "../db_config.php";

if(isset($_POST['reject'])){
    $id = $_POST['id'];
    $date = $_POST['date'];


    $sql = "DELETE FROM tbl_shifts WHERE Id = '$id' ";

    if(mysqli_query($link, $sql)){
        print('success');
    }
//    header("Location: ../welcome.php");
}

if(isset($_POST['accept'])){
    $id = $_POST['id'];
    $date = $_POST['date'];

    $sql = "UPDATE tbl_shifts SET fldStatus = 'Accepted' WHERE Id = '$id'";
    mysqli_query($link, $sql);
    header("Location: ../welcome.php");

}