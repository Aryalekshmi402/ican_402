
<?php $con=mysqli_connect("localhost","root","","ican");

$b=$_POST['id'];
 
$sql=mysqli_query($con,"update logintbl set status=1 where loginid='$b' &&usertype='student' ");
if ( $sql ){
echo "<script>alert('Approved');
      window.location='pending.php';
	  </script>";
}


else {
	echo "<script>alert('Error');</script>";
}
?>