
<?php $con=mysqli_connect("localhost","root","","ican");

$b=$_GET['id'];
 
$sql=mysqli_query($con,"DELETE FROM `tlb_stud` WHERE loginid=$b ");
$sqll=mysqli_query($con,"DELETE FROM `logintbl` WHERE loginid=$b ");
if ( $sql && $sqll ){
echo "<script>alert('removed');
      window.location='ourstud.php';
	  </script>";
}


else {
	echo mysqli_error($con);
}
?>