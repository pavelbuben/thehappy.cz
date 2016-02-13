<?php


$message = $_POST['message'];
$name = $_POST['name'];
$email = $_POST['email'];

$to      = 'info@thehappy.cz';
$subject = 'Kontaktní formulář na TheHappy.cz';
$message = $message . "\n<br> $name $email";
$headers = 'From: '.$name.' <'.$email.'>' . "\r\n";

@mail($to, $subject, $message, $headers);

header('Content-Type: application/json');
echo json_encode(['success'=>true]);

