<?php
include('../config.php');
if (isset($_GET['type'])) {
    $myArray = array();
    if ($_GET['type'] == 'CLASSES') {
        $res = mysqli_query($con, "select * from tbl_class");
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['classes' => $myArray]);
    }
    if ($_GET['type'] == 'SYLLABUS') {
        $res = mysqli_query($con, "select * from syllabustbl");
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['syllabus' => $myArray]);
    }
    if ($_GET['type'] == 'STUDENTS') {
        $class = $_GET['class'];
        $syllabus = $_GET['syllabus'];
        $res = mysqli_query($con, "select * from studtbl");
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['students' => $myArray]);
    }
    if ($_GET['type'] == 'SESSION') {

        $res = mysqli_query($con, "select * from tbl_class_sessions");
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['sessions' => $myArray]);
    }
}