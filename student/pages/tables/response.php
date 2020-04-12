<!DOCTYPE html>
<html>
<head>
	<title>Cashfree - PG Response Details</title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
	<h1 align="center">Payment Success</h1>	

	<?php  
		 $secretkey = "bb8bd804cfaa1bc561e9103f371eb2ed2bca7c72";
		 $orderId = $_POST["orderId"];
		 $orderAmount = $_POST["orderAmount"];
		 $referenceId = $_POST["referenceId"];
		 $txStatus = $_POST["txStatus"];
		 $paymentMode = $_POST["paymentMode"];
		 $txMsg = $_POST["txMsg"];
		 $txTime = $_POST["txTime"];
		 $signature = $_POST["signature"];
		 $data = $orderId.$orderAmount.$referenceId.$txStatus.$paymentMode.$txMsg.$txTime;
		 $hash_hmac = hash_hmac('sha256', $data, $secretkey, true) ;
		 $computedSignature = base64_encode($hash_hmac);
		 
		
		//  if ($signature == $computedSignature) {
	 ?>
	<div class="container"> 
	<div class="panel panel-success">
	  <div class="panel-heading">Payment Success</div>
	  <div class="panel-body">
	  	<!-- <div class="container"> -->
	 		<table class="table table-hover">
			    <tbody>
			      <tr>
			        <td>Order ID</td>
			        <td><?php echo $orderId; ?></td>
			      </tr>
			      <tr>
			        <td>Order Amount</td>
			        <td><?php echo $orderAmount; ?></td>
			      </tr>
			      <tr>
			        <td>Reference ID</td>
			        <td><?php echo $referenceId; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Status</td>
			        <td><?php echo $txStatus; ?></td>
			      </tr>
			      <tr>
			        <td>Payment Mode </td>
			        <td><?php echo $paymentMode; ?></td>
			      </tr>
			      <tr>
			        <td>Message</td>
			        <td><?php echo $txMsg; ?></td>
			      </tr>
			      <tr>
			        <td>Transaction Time</td>
			        <td><?php echo $txTime; ?></td>
			      </tr>
				  <tr>
			        <td></td>
			        <td>
					<button class="btn btn-success btn-sm" onclick="bck();">Back</button>
		<button class="btn btn-success btn-sm" onclick="printReceipt();">Print Receipt</button>


					</td>
			      </tr>

			    </tbody>
			</table>
			<?php
			include('../../../config.php');
			$exp=explode("_",$orderId);
			$fee_id=$exp[0];
			$Stud_id=$exp[1];
			 $date=date('Y-m-d');
			 $query="insert into payments(amount,fees_id,student_id,status,payment_date,payment_mode) values ('$orderAmount','$fee_id','$Stud_id','Completed','$date','$paymentMode')";
			 $upd="update student_dues set status='Payment Completed',payment_date='$date' where id='$fee_id'";
			 if(mysqli_query($con,$query)){
				 mysqli_query($con,$upd);
				 ?>
				 <script>
					 alert('Payment Completed'); 
					 </script>
				 <?php
				 mysqli_close($con);
			 } 
			?>
		<!-- </div> -->

	   </div>
	</div>
	</div>
	<script>
	function printReceipt(){
		window.print();
	}
	function bck() {
		window.location.href="student_fees.php";
	}
	</script>

</body>
</html>



