<?php

require_once ('PHPMailer/src/PHPMailerAutoload.php');


if (empty($_POST['name'])      ||
    empty($_POST['email'])     ||
    empty($_POST['phone'])     ||
    empty($_POST['message'])   ||
    !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
{
    echo "No arguments Provided!";
    return false;
}

$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$phone = strip_tags(htmlspecialchars($_POST['phone']));
$message = strip_tags(htmlspecialchars($_POST['message']));

$mail = new PHPmailer();

$mail-> isSMTP();
$mail-> SMTPAuth = true;
$mail-> SMTPSecure = 'ssl';
$mail-> Host = 'smtp.gmail.com';
$mail-> Port = '465';
$mail-> isHTML();
$mail-> Username = 'admin@adprh.mx';
$mail-> Password = 'R%gSW(3g03=}$:OD';
$mail-> SetFrom($email_address);
$mail-> Subject = 'Notifiación de Contacto';
$mail-> Body = 'test';
$mail-> AddAddress('rsk@adprh.mx');

$mail-> send();