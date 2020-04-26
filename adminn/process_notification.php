<?php include('../config.php');?>
<?php
//TODO check for existing attendance in same date and same session and session number
$message = $_POST['message'];
$audience = $_POST['audience'];
$q = "insert into notification values(NULL,NULL,NULL,1,'$audience','$message','')";
mysqli_query($con, $q);
$_SESSION['message'] = 'Notification Added';
header('location:add_notification.php');
