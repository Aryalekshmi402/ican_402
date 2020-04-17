<?php
session_start();
include('../../../config.php');
$loginid = $_SESSION['loginid'];
$syid=$_GET['sy_id'];
$subid=$_GET['sub_id'];
$q="select * from tlb_material where subid=$subid and classid=(select course from studtbl where loginid=$loginid)";
$res=mysqli_query($con,$q);
$myArray = array();
while ($row = mysqli_fetch_array($res)) {
    $myArray[] = $row;
}
echo json_encode(['materials' => $myArray]);