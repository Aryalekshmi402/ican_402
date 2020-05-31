<?php include('../config.php');;

$b=$_POST['id'];
include ('../student/pages/forms/send_mail.php');
$sql=mysqli_query($con,"update logintbl set status=1 where loginid='$b' &&usertype='student' ");
$qq=mysqli_query($con,"select * from logintbl where loginid='$b'");
$user = mysqli_fetch_array($qq);
if ( $sql ){
    $body = 'YOUR REQUEST FOR ADMISSION HAS APPROVED';
    send($user['emailid'],'iCan Smart Study Center',$body);
echo "<script>alert('Approved');
      window.location='pending.php';
	  </script>";
}


else {
	echo "<script>alert('Error');</script>";
}
?>