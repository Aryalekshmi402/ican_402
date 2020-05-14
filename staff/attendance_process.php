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
    if ($_GET['type'] == 'STAFFS') {
        $res = mysqli_query($con, "select * from tlb_staff");
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['staffs' => $myArray]);
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


        $query = "SELECT DISTINCT loginid FROM `studentsub` WHERE syid='$syllabus' ";
        $result = mysqli_query($con, $query);


        while ($row = mysqli_fetch_array($result)) {
            $a = $row['loginid'];

            $res = mysqli_query($con, "select * from studtbl where loginid='$a'AND course=$class");
            while ($row = mysqli_fetch_array($res)) {
                $myArray[] = $row;
            }
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
    if ($_GET['type'] == 'REPORT') {
        $student = $_GET['student'];
        $date = $_GET['date'];
        if ($date == '') {
            $query = "select * from tbl_attendance where student_id=$student";
        } else {
            $query = "select * from tbl_attendance where student_id=$student and date='$date'";
        }

        $res = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['reports' => $myArray]);
    }
    if ($_GET['type'] == 'STAFF_REPORT') {
        $staff = $_GET['staff'];
        $date = $_GET['date'];
        if ($date == '') {
            $query = "select *,tbl_class.classname from staff_attendance,tbl_class where loginid=$staff and tbl_class.classid=staff_attendance.class_id";
        } else {
            $query = "select * from staff_attendance where loginid=$staff and date='$date'";
        }
        $res = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['reports' => $myArray]);
    }

    if ($_GET['type'] == 'INDIVIDUAL_REPORT') {
        $student = $_SESSION['loginid'];
        $date = $_GET['date'];
        if ($date == '') {
           $query = "select * from tbl_attendance where student_id=(select signid from studtbl where loginid=$student)";
        } else {
            $query = "select * from tbl_attendance where student_id=(select signid from studtbl where loginid=$student) and date='$date'";
        }
        $res = mysqli_query($con, $query);
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['reports' => $myArray]);
    }
}