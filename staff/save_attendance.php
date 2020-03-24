<?php
include('../config.php');
//TODO check for existing attendance in same date and same session and session number
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
foreach ($data->students as $student) {
    $status = $student->status==1?1:0;
    $duration = $status==1 ? $data->duration : 0;
    $q = "insert into tbl_attendance values(NULL,$student->signid,$data->session_number,$data->session,$duration,$status,'$data->date')";
    mysqli_query($con, $q);
}