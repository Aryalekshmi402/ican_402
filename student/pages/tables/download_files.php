<?php
session_start();
include('../../../config.php');
$loginid = $_SESSION['loginid'];
$syid=$_GET['sy_id'];
$q="select * from tbl_material where syid=$syid and classid=(select course from studtbl where loginid=$loginid)";
$res=mysqli_query($con,$q);
$myArray = array();
while ($row = mysqli_fetch_array($res)) {
    $myArray[] = $row;
}
echo json_encode(['reports' => $myArray]);