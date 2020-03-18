<?php
include('../config.php');

$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
foreach ($data->students as $student) {
    $q="insert into tbl_attendance values(NULL,$student,$data->session_number,$data->session,$data->duration,1,'$data->date')";
    echo $q;
    mysqli_query($con, $q);
}