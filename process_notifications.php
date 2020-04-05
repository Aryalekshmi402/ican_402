<?php
session_start();
include('config.php');
if (isset($_GET['type'])) {
    $myArray = array();
    if ($_GET['type'] == 'STAFF') {
        $res = mysqli_query($con, "select * from notification where audiance ='STAFF' order by notification_id desc ");
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['notifications' => $myArray]);
    }
    if ($_GET['type'] == 'STUDENT') {
        $res = mysqli_query($con, "select * from notification where audiance ='STUDENT' order by notification_id desc");
        while ($row = mysqli_fetch_array($res)) {
            $myArray[] = $row;
        }
        echo json_encode(['notifications' => $myArray]);
    }
}