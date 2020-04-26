<?php include('../config.php'); ?>
<?php
$student_id=$_GET['id'];
$amount=$_GET['amount'];
$year=date('Y');
$installment_amnt=$amount/3;
for($i=1;$i<=3;$i++){
    $instmnt='Installment '.$i;
    $p= mysqli_query($con,"insert into student_dues (student_id ,year,amount,installment_no,status)values('$student_id','$year','$installment_amnt','$instmnt','Payment Pending')"); 
}
?>
<script>
    alert('Installments sent to the student .!');
</script>
<?php
header('Location:student_fees.php');
?>