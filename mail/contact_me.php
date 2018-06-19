<?php
// Check for empty fields
if(empty($_POST['name'])      ||
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
   
// Create the email and send the message
$to = 'abonnin@apdrh.mx';
$email_subject = "Mensaje de:  $name";
$email_body = "Se ha recibido un nuevo mensaje.\n\n"."Estos son los detalles:\n\nNombre: $name\n\nEmail: $email_address\n\nTel: $phone\n\nMensaje:\n$message";
$headers = "From: noreply@adprh.mx\n";
$headers .= "Reply: $email_address";
mail($to,$email_subject,$email_body,$headers);
return true;         
?>