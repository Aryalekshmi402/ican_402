<?php
function send($receiver,$subject,$body) {
    require 'phpmailer/PHPMailerAutoload.php';
    $mail = new PHPMailer;
    $mail->isSMTP();
    $mail->Host='smtp.gmail.com';
    $mail->Port=587;
    $mail->SMTPAuth=true;
    $mail->SMTPsecure='tls';
    $mail->Username='icanmine402@gmail.com';//send cheyyunna mail id
    $mail->Password='kunJa@1323';//ayinte password

    $mail->setFrom('icanmine402@gmail.com');
    $mail->addAddress($receiver);//receiverinte mail
    $mail->addReplyTo('icanmine402@gmail.com');//thirich reply theranam engil a mail

    $mail->isHTML(true);//html code mail ayakkan true akki iduka
    $mail->Subject=$subject;

    $mail->Body=$body;
    ;//bod
    if(!$mail->send())
    {
       return false;

    }
   return true;
}