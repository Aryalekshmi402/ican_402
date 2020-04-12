<!DOCTYPE html>
<html>

<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <style>
        button {
            background-color: #fff;
            border: none;
            cursor: pointer;
        }
        
        button:hover {
            background-color: #fff;
            border: none;
            cursor: pointer;
            color: green;
        }
        
        #pdfdiv {
            color: green;
        }
    </style>

    <script type="text/javascript" src="jspdf.min.js"></script>

    <script type="text/javascript" src="jquery-git.js"></script>

    <style type="text/css">
</style>
    </style>

    <title></title>

    <script type='text/javascript'>
        //<![CDATA[
        $(window).on('load', function() {
            var doc = new jsPDF();
            var specialElementHandlers = {
                '#editor': function(element, renderer) {
                    return true;
                }
            };

            // $('#pdfview').click(function() {
                doc.fromHTML($('#pdfdiv').html(), 15, 15, {
                    'width': 700,
                    'elementHandlers': specialElementHandlers
                });
                doc.save('file.pdf');
                window.location.href="student_fees.php";
            // });
        }); //]]>
    </script>
<style>
table {
  border-collapse: collapse;
}

table, td, th {
  border: 1px solid black;
}
</style>
</head>

<body>
<h4>Please wait. Your receipt under process....!!! </h4>
    <div id="pdfdiv" >
    <?php
        include('../../../config.php');
            $student_id=$_GET['stu_id'];
            $fee_id=$_GET['fee_id'];
            $r=mysqli_query($con,"select * from payments where fees_id='$fee_id'");
            $rr=mysqli_fetch_array($r);
            $r11=mysqli_query($con,"select * from student_dues where id='$fee_id'");
            $rr11=mysqli_fetch_array($r11);
            $r112=mysqli_query($con,"select * from studtbl where loginid='$student_id'");
            $rr112=mysqli_fetch_array($r112);
            $course=$rr112['course'];
            $r11211=mysqli_query($con,"select * from tbl_class where classid='$course'");
            $class=mysqli_fetch_array($r11211);
    ?>
    
    <table style="display:none">
            <tr>
                <th><h1>I Can Tution Center <?php echo $rr11['year']; ?>  <?php echo $rr11['installment_no']; ?> Receipt </h1> </th>
                <th>------------------------------------------------------------------------------------------------------------------------------</th>
                <th><h3><u>Student Details</u> </h3></th>
                <th>Student Name : <?php echo $rr112['fname'].' '.$rr112['gname']; ?></th>
                <th>Gender : <?php echo $rr112['ge']; ?></th>
                <th>Date Of Birth : <?php echo $rr112['dob']; ?></th>
                <th>Mobile  : <?php echo $rr112['mob']; ?></th>
                <th>Pin : <?php echo $rr112['pin']; ?></th>
                <th>city : <?php echo $rr112['city']; ?></th>
                <th>Course : <?php echo $class['classname']; ?> Class</th>
                <th>------------------------------------------------------------------------------------------------------------------------------</th>
            </tr>
</table>
         <table style="display:none">
            <tr>
            <th><h3><u>Payment Details</u> </h3></th>
                <th>Amount  &nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;: <?php echo $rr['amount']; ?></th>
                <th>Fee on : <?php echo $rr11['year']; ?></th>
                <th>Installment No : <?php echo $rr11['installment_no']; ?></th>
                <th>Payment Date : <?php echo $rr['payment_date']; ?></th>
                <th>Payment Mode  : <?php echo $rr['payment_mode']; ?></th>
                <th>------------------------------------------------------------------------------------------------------------------------------</th>
                <th>Thank You,</th>
                <th>I can Tution Center</th>
                <th>Date : <?php echo date('d-M-Y'); ?></th>
            </tr>
</table>
    
    </div>
    <div id="editor"></div>
</body>

</html>