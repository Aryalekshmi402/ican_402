<?php
    include ('config.php');

  $m="admin123@gmail.com";
  $p="Admin1234";
  $psw=md5($p);
  $sq="INSERT INTO logintbl(emailid,password,usertype,status) VALUES('$m','$psw','admin',1) ";
  $qu=mysqli_query($con,$sq);
  if($qu)
  {
  	echo "Success";
  }
  else
  {
  	echo $con->error;
  }
?>