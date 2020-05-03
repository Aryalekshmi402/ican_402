<?php include('../config.php');?>
<?php
$date_string=implode(',',$_POST['dates']);
$b=$_POST['id'];
$sql=mysqli_query($con,"UPDATE `stud_leave` SET status=1,ldate='$date_string' where leaveid='$b'");
if ( $sql){
echo "<script>alert('Approved');
      window.location='leaveapproval1.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>