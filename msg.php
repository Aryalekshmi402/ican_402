
<?php $con=mysqli_connect("localhost","root","","ican");?>
<?php
if(isset($_POST['recover']))
{
	
		$emailid=$_POST['emailid'];
	//unset($_COOKIE["user"]);
	//unset($_COOKIE["regid"]);
	
	
	$sql="SELECT emailid FROM logintbl WHERE emailid='$emailid'";
	$result=mysqli_query($con,$sql);
	 $row=mysqli_fetch_assoc($result);
	 $a=$row['emailid'];
	
	if($a==$emailid)
	{
	
		
		$result="";
		$maild=$a;
		require 'phpmailer/PHPMailerAutoload.php'; 
		$mail = new PHPMailer;
		$mail->isSMTP();
		$mail->Host='smtp.gmail.com';
		$mail->Port=587;
		$mail->SMTPAuth=true;
		$mail->SMTPsecure='tls';
		$mail->Username='aryasyama402@gmail.com';//send cheyyunna mail id
		$mail->Password='syamasurya';//ayinte password
		
		$mail->setFrom($maild);
		$mail->addAddress($a);//receiverinte mail
		$mail->addReplyTo($maild);//thirich reply theranam engil a mail
		
		$mail->isHTML(true);//html code mail ayakkan true akki iduka
		$mail->Subject='Forgot password..';//mail subject
		$mail->Body='<h1></h1>';//body
		if(!$mail->send())
		{
		$result="Something went wrong";
		echo $result;
		
		}
		else
		{
			$result="Mail went successfully";  
			echo $result;
		}
		
	}
	else{
		echo "trdrt";
	}
}
else{
	echo "wrong";
}
	?>


<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body><br><br><br>
<form method="post" action="msg.php">
	<center>
<input type="text" name="emailid" placeholder="email"><br><br>
<input type="submit"  name="recover">	</center>
</form>
</body>
</html>