
<?php include('config.php');?>

<?php

$b=$_POST['id'];

$sql=mysqli_query($con,"DELETE FROM tbl_leave WHERE leaveid ='$b'");

if ($sql){
 echo "<script>alert('Deleted');
      window.location='status.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>