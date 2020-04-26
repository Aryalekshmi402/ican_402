<?php
include('../../../config.php');
$loginid = $_SESSION['loginid'];
$subid=$_GET['sub_id'];
$q="select * from tlb_material where subject_id=$subid and classid=(select course from studtbl where loginid=$loginid)";
$res=mysqli_query($con,$q);
$myArray = array();
while ($row = mysqli_fetch_array($res)) {
    $myArray[] = $row;
}
echo json_encode(['materials' => $myArray]);