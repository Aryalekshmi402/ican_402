<?php
include('../config.php');
$syllabus_id=$_POST["syllabus_id"];
$class_id=$_POST["class_id"];
$type=$_POST["time_type"];
$row_count=$_POST["row_count"];
$date=$_POST["date"];
$fn_sub=$_POST["fn_sub"];
$an_sub=$_POST["an_sub"];
$status=true;


for($i=0;$i<=$row_count;$i++){
    $query1="SELECT * from timetable where syllabus_id='$syllabus_id' and class_id='$class_id' and type='$type' and date='$date[$i]'";
    $result1 = mysqli_query($con,$query1);
    $data=mysqli_fetch_array($result1);
    if($data){
        $status=false;
        break;   
    }
}

if($status==true){
    for($i=0;$i<=$row_count;$i++){
        $query="INSERT INTO timetable VALUES('','$syllabus_id','$class_id','$type','$date[$i]','$fn_sub[$i]','$an_sub[$i]')";
        $result = mysqli_query($con,$query);
    }
    echo 'Timetable datas saved';
}else{
    $return=$data['date'].' already exist on '.$type.' timetable with same syllabus and class';
    echo $return;
}
?>


