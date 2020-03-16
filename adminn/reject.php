<?php
session_start();
include('config.php');

$b=$_POST['id'];
$s=mysqli_query($con,"select usertype from logintbl where loginid='$b' ");
$row=mysqli_fetch_array($s);
$ut=$row['usertype'];
if($ut=='student')
{
$sqlll=mysqli_query($con,"delete  from studtbl where loginid='$b'");
$sqllll=mysqli_query($con,"delete  from logintbl where loginid='$b'");
if ( $sqlll && $sqllll ){
 echo "<script>alert('Removed');
      window.location='pending.php';</script>";
}
}
else {
	echo "<script>alert('Error');</script>";
	
}


?>