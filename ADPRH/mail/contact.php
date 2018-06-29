<?php

require_once ('../PHPMailer/PHPMailerAutoload.php');
//
//
//if (empty($_POST['name'])      ||
//    empty($_POST['email'])     ||
//    empty($_POST['phone'])     ||
//    empty($_POST['message'])   ||
//    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
//{
//    echo "No arguments Provided!";
////    return false;
//}
//
//$name = strip_tags(htmlspecialchars($_POST['name']));
//$email_address = strip_tags(htmlspecialchars($_POST['email']));
//$phone = strip_tags(htmlspecialchars($_POST['phone']));
//$message = strip_tags(htmlspecialchars($_POST['message']));

$mail = new PHPMailer();
$mail-> isSMTP();
$mail->SMTPAuth = true;
$mail->SMTPSecure = 'ssl';
$mail->Host = 'smtp.gmail.com';
$mail->Port = '25';
$mail->isHTML();
$mail-> Username = 'admin@adprh.mx';
$mail->Password = 'R%gSW(3g03=}$:OD';
$mail-> SetFrom('contacto@adprh.mx');
$mail->Subject ='Notificación de contacto';
$mail-> Body = 'Mensaje';
$mail->AddAddress('rsk@adprh.mx');

$mail->Send();
if (!$mail->send()) {
    echo "Mailer Error: " . $mail->ErrorInfo;
} else {
    echo "¡Tu mensaje ha sido enviado!";

}

//header('Location: ../index.html');
