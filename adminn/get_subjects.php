<?php
session_start();
include('../config.php');

$res = mysqli_query($con, "select * from tbl_subject_master");
while ($row = mysqli_fetch_array($res)) {
    $myArray[] = $row;
}
echo json_encode(['subjects' => $myArray]);
