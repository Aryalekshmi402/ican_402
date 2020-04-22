<?php
session_start();
$con=mysqli_connect("localhost","root","","ican");
$mark=$_POST["mark"];
$mark_id=$_POST["mark_id"];
$query="UPDATE student_marks set mark='$mark' where id='$mark_id'";
$result = mysqli_query($con,$query);
return true;
?>


