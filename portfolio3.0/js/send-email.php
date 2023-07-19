<?php


$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$subject = $_POST['subject'];
$message = $_POST['message'];

$mailheader - "From:" .$name."<".$email.">\r\n"

$recipient = "ncg6578@gmail.com";


mail($recipient, $subject, $message, $mailheader)
or die("Error!");


echo'





';
?>