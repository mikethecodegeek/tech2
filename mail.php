<?php $name = $_POST['contactName'];
$email = $_POST['contactEmail'];
$message = $_POST['contactMessage'];
$formcontent="From: $name \n Message: $message";
$recipient = "mikethecodegeek@gmail.com";
$subject = $_POST['contactSubject'];
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
echo "Thank You!";
?>
