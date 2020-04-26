<?php
include('../../../config.php');
$syll_id=$_POST["syl"];
$cls_id=$_POST["cls"];
$staff_id=$_SESSION['loginid'];
$query="SELECT * from  student_marks  WHERE syllabus_id='$syll_id' and class_id='$cls_id' and teacher_id='$staff_id' ";
$result = mysqli_query($con,$query);

?>
    <table class="table table-bordered">
        <thead>
            <tr>
                <th>Sl.No</th>
                <th style="width: 20%"> Names</th>
                <th style="width: 20%"> Exam Name</th>
                <th style="width: 15%"> Subject</th>
                <th> Mark</th>
                <th>Total Mark</th>
                <th> Action</th>
            </tr>
        </thead>
    <?php
    $i=1;
    while($row = mysqli_fetch_array($result))
    {
        $stu_id=$row['student_id'];
        $query1="SELECT * from  studtbl  WHERE signid='$stu_id'";
    $result1 = mysqli_query($con,$query1);
    $stu_data=mysqli_fetch_array($result1);
        ?>
        <tr>
            <td>
                <?php echo $i++; ?>
            </td>
            <td>
                <?php echo $stu_data['fname'].' '.$stu_data['gname']; ?>
            </td>
            <td>
                <?php echo $row['exam_name']; ?>
            </td>
            <td>
                <?php echo $row['subject']; ?>
            </td>
            <td>
                <input required="required" min="2" type="text" value="<?php echo $row['mark']; ?>" id="mark_<?php echo $row['id']; ?>" style="width:250px;">
            </td>
            <td>
                <?php echo $row['total_mark']; ?>
            </td>
            <td>
                <button onclick='updateMark(<?php echo $row['id']; ?>)' class="btn btn-success btn-sm">Update</button>
            </td>
        </tr>
        <?php
    }
    ?>
    </table>

