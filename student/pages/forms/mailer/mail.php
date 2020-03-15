<?php
$result="";
$maild='riyatreesajimmy@mca.ajce.in';
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
$mail->addAddress('riyatreesajimmy@mca.ajce.in');//receiverinte mail
$mail->addReplyTo($maild);//thirich reply theranam engil a mail

$mail->isHTML(true);//html code mail ayakkan true akki iduka
$mail->Subject='Test Mail';//mail subject
$mail->Body='<h1>Hello Arjun</h1>';//body
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
?>