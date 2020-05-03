<?php include('../config.php');

$b=$_GET['id'];
 
$sql=mysqli_query($con,"DELETE FROM `tlb_staff` WHERE loginid=$b ");
$sqll=mysqli_query($con,"DELETE FROM `logintbl` WHERE loginid=$b ");
if ( $sql && $sqll ){
echo "<script>alert('removed');
      window.location='ourstaff.php';
	  </script>";
}


else {
	echo mysqli_error($con);
}
?>