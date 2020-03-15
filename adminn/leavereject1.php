<?php $con=mysqli_connect("localhost","root","","ican");?> 

<?php
$b=$_POST['id'];
$sql=mysqli_query($con,"UPDATE `stud_leave` SET  status=-1 where leaveid='$b'");
if ($sql){
 echo "<script>alert('Removed');
      window.location='leaveapproval1.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>