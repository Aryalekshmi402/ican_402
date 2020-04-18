<?php
// $lin=$_GET['id'];
include('../config.php');
include('../config.php');
//TODO check for existing attendance in same date and same session and session number
$request_body = file_get_contents('php://input');
$data = json_decode($request_body);
$syllabus=$data->data->syllabus;
$class=$data->data->class_name;
foreach ($data->data->subjects as $subject) {
    $sub = $subject->id;
    $name=$syllabus;
    if ($name == "ICSE") {

        $p = mysqli_query($con, "insert into icse_tbl (syid,classid,type)values(3,'$class','$sub')");
        echo mysqli_error($con);

    } else if ($name == "CBSE") {

        $p = mysqli_query($con, "insert into cbse_tbl (syid,classid,type)values(2,'$class','$sub')");
        echo mysqli_error($con);

    } else if ($name == "KERALA") {

        $p = mysqli_query($con, "insert into kerala_tbl (syid,classid,type)values(1,'$class','$sub')");
        echo mysqli_error($con);
    }
}
?>