<?php $name = $_POST['name'];
$email = $_POST['email'];
$tel = $_POST['tel'];
$vehicle = $_POST['vehicle'];
$message = $_POST['message'];
$formcontent="From: $name \n Telephone: $tel \n Vehicle: $vehicle \n Message: $message";
$recipient = "sales@deliciousdetails.co.uk";
$subject = "Contact Form";
$mailheader = "From: $email \r\n";
mail($recipient, $subject, $formcontent, $mailheader) or die("Error!");
$submitted = "Success! You entered: ".$input;
?>