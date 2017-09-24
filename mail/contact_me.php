<?php
// Check for empty fields
if(empty($_POST['name'])      ||
   empty($_POST['email'])     ||
   empty($_POST['num'])       ||
   !filter_var($_POST['email'],FILTER_VALIDATE_EMAIL))
   {
   echo "No arguments Provided!";
   return false;
   }
   
$name = strip_tags(htmlspecialchars($_POST['name']));
$email_address = strip_tags(htmlspecialchars($_POST['email']));
$ch05 = strip_tags(htmlspecialchars($_POST['ch05']));
$ch510 = strip_tags(htmlspecialchars($_POST['ch510']));
$num = strip_tags(htmlspecialchars($_POST['num']));
$message = strip_tags(htmlspecialchars($_POST['message']));
   
// Create the email and send the message
$to = 'federico.cabassi@gmail.com'; // Add your email address inbetween the '' replacing yourname@yourdomain.com - This is where the form will send a message to.
$email_subject = "Conferma inviata da:  $name";
$email_body = "Qualcuno ti ha confermato la presenza alla festa!\n\n"."Dettagli:\n\nNome: $name\n\nEmail: $email_address\n\nNumero bambini 0-5: $ch05\n\nNumero bambini 5-10: $ch05\n\nNumero adulti: $num\n\nMessage:\n$message";
$headers = "From: federico.cabassi@gmail.com\n"; // This is the email address the generated message will be from. We recommend using something like noreply@yourdomain.com.
$headers .= "Reply-To: $email_address";   
mail($to,$email_subject,$email_body,$headers);
return true;         
?>