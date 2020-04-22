<?php
session_start();
$con=mysqli_connect("localhost","root","","ican");
$syll_id=$_POST["syl"];
$cls_id=$_POST["cls"];
$exam=$_POST["exam"];
$total_mark=$_POST["total_mark"];

$query="SELECT * from  studtbl  WHERE syllabus_id='$syll_id' and course='$cls_id' ";
$result = mysqli_query($con,$query);

?>
<input type="hidden" name="row_count" value="<?php echo $result->num_rows; ?>">
    <table class="table table-bordered">
        <thead>
            <tr>
                <th> Names</th>
                <th> Marks</th>
            </tr>
        </thead>
    <?php
    $i=1;
    while($row = mysqli_fetch_array($result))
    {
        $mark='mark_'.$i;
        $student_id='student_id_'.$i;
        ?>
        <tr>
            <td>
                <?php echo $row['fname'].' '.$row['gname']; ?>
            </td>
            <td>
                <input type="number" max="<?php echo $total_mark; ?>" required  name="<?php echo $mark; ?>" style="width:350px;">
                <input type="hidden" name="<?php echo $student_id; ?>"  value="<?php echo $row['signid']; ?>">
            </td>
        </tr>
        <?php
       $i++;    
    }
    ?>
    </table>
