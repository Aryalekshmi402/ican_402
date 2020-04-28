<?php include('../config.php');


 $cl=$_GET[id];
$sql=mysqli_query($con,"DELETE FROM `tbl_class` where classid='$cl' ");
//$sqll=mysqli_query($con,"DELETE FROM `logintbl` WHERE loginid=$b ");
if ( $sql )
{
echo "<script>alert('removed');
      window.location='viewcourse.php';
	  </script>";
}


else {
	echo mysqli_error($con);
}
?>