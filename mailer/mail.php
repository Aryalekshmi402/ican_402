<?php
$result="";
$maild='aryasyama402@gmail.com';
require 'phpmailer/PHPMailerAutoload.php';
function send($receiver,$body){
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPsecure='tls';
    $mail->Username='aryasyama402@gmail.com';//send cheyyunna mail id
    $mail->Password='syamasurya';//ayinte password

    $mail->setFrom($receiver);
    $mail->addAddress($receiver);//receiverinte mail
    $mail->addReplyTo($receiver);//thirich reply theranam engil a mail

    $mail->isHTML(true);//html code mail ayakkan true akki iduka
    $mail->Subject='Test Mail';//mail subject
    $mail->Body=$body;//body
    if(!$mail->send())
    {
        echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";

    }
    else
    {

        $result="Mail went successfully";
        echo $result;
    }
}
send('aryasyama402@gmail.com','<h1>hi</h1>');
?>