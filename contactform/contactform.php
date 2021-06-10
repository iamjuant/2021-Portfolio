<?php

$receiving_email_address = 'jtrujillotarelo@gmail.com';



$from_name = $_POST['name'];
$from_email = $_POST['email'];
$subject = $_POST['subject'];

// Uncomment below code if you want to use SMTP to send emails. You need to enter your correct SMTP credentials
$message = $_POST['message'];
$body = "From: $from_name\n E-Mail: $from_email\n Message:\n $message";

mail($receiving_email_address,$subject,$body);
echo 'OK'
?>