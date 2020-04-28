<?php include('../config.php');?>
<?php
$b=$_POST['id'];
$sql=mysqli_query($con,"UPDATE `tbl_leave` SET  status=-1 where leaveid='$b'");
if ($sql){
 echo "<script>alert('Removed');
      window.location='leaveapproval.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>