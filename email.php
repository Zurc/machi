<?php 

$to  = 'pastorjt@gmail.com' . ', '; // note the comma
$to .= 'cruzjurado@gmail.com';
// $to .= 'mteranfrias@googlemail.com';

$name = $_REQUEST["contactname"];
$mail = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];

mail($to, $subject, $message, "From: " . $mail);

?>