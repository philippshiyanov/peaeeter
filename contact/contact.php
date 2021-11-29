<?php
$to      = 'philipp@shiyanov.com';
$subject = 'peaeeter form submission!';
$message = 'my name is ' . $_POST['name'] . '. This is my story: ' . $_POST['story'];
$message = wordwrap($message, 70, "\r\n");
$headers = 'From: '.$_POST['email'] . "\r\n" . phpversion();

mail($to, $subject, $message, $headers);
?>
