<?php $name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
$formcontent="Name: $name \n Email: $email \n Message: $message";
$recipient = "mdsobuzchandar520@gmail.com";
$subject = "New message from Website";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");

?>
