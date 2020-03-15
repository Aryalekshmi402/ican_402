<?php
$con=mysqli_connect("localhost","root","","ican");
$p="surya@123";
$psw=md5($p);
$sql=mysqli_query($con,"Update logintbl set password='$psw' where emailid='surya@gmail.com' ");
?>