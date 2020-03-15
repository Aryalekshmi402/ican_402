
<?php $con=mysqli_connect("localhost","root","","ican");?>

<?php

$b=$_POST['id'];
$sql=mysqli_query($con,"DELETE FROM tbl_leave WHERE leaveid ='$b'");

if ($sql){
 echo "<script>alert('Deleted');
      window.location='viewapplyedjob.php';</script>";
}
else {
	echo "<script>alert('Error');</script>";
}
?>