<?php 

$to  = 'mteranfrias@googlemail.com';


$name = $_REQUEST["contactname"];
$mail = $_REQUEST["email"];
$subject = $_REQUEST["subject"];
$message = $_REQUEST["message"];

mail($to, $subject, $message, "From: " . $mail);

?>