<?php
include('../config.php');
//TODO check for existing attendance in same date and same session and session number
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
$status = 0;
$status = (int)($data->duration)>0 ? 1 : 0;
echo $status;
$q = "insert into  staff_attendance values(NULL,$data->staff,$data->class,$data->session,$data->session_number,$data->duration,$status,'$data->date',$data->syllabus)";
echo $q;
mysqli_query($con, $q);
