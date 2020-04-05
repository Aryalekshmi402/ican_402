<?php
session_start();
include('config.php');
if (isset($_GET['type'])) {
    $myArray = array();
    if ($_GET['type'] == 'STAFF') {
        $staff = $_SESSION['loginid'];
        $count = mysqli_query($con, "select * from tlb_staff where loginid=$staff");
        $count_result = mysqli_fetch_array($count);
        $notification_count = $count_result['notification'];
        $res = mysqli_query($con, "select * from notification where audiance ='STAFF' order by notification_id desc ");
        $total_count = mysqli_num_rows($res);
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode([
            'notifications' => $myArray,
            'count' => $total_count - $notification_count
        ]);
    }
    if ($_GET['type'] == 'UPDATE_STAFF') {
        $staff = $_SESSION['loginid'];
        $res = mysqli_query($con, "select * from notification where audiance ='STAFF' order by notification_id desc ");
        $total_count = mysqli_num_rows($res);
        $count = mysqli_query($con, "update tlb_staff set notification=$total_count where loginid=$staff");
    }
    if ($_GET['type'] == 'UPDATE_STUDENT') {
        $staff = $_SESSION['loginid'];
        $res = mysqli_query($con, "select * from notification where audiance ='STUDENT' order by notification_id desc ");
        $total_count = mysqli_num_rows($res);
        $count = mysqli_query($con, "update studtbl set notification=$total_count where loginid=$staff");
    }

    if ($_GET['type'] == 'STUDENT') {
        $student = $_SESSION['loginid'];

        $count = mysqli_query($con, "select * from studtbl where loginid=$student");
        $count_result = mysqli_fetch_array($count);
        $notification_count = $count_result['notification'];

        $res = mysqli_query($con, "select * from notification where audiance ='STUDENT' order by notification_id desc");
        $total_count = mysqli_num_rows($res);
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode([
            'notifications' => $myArray,
            'count'=>$total_count-$notification_count
        ]);
    }
}