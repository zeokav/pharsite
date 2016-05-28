<?php 

$name = $_POST['name'];
$email = $_POST['id'];
$message = $_POST['message'];
$formcontent="From: $name \n Message: $message";
$recipient = "manojbhat09@gmail.com";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
$success=mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!" . " -" . "<a href='Untitled-1.html' style='text-decoration:none;color:#3D7A99;'> Return Home</a>";
echo "$success";
?>