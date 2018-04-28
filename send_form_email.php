<?php

$Name = $_POST['Name'];
$Email = $_POST['Email'];
$Comment = $_POST['Comment'];
$to = 'logan.yerian@gmail.com';
$subject = $_POST['Free-Lance Web-Design'];

$body = "From: $Name\n E-Mail: $Email\n Message:\n $Comment";

if ($_POST['submit']) {
    if (mail($to, $subject, $body)) {
        echo '<p>Your message has been sent!</p>';
    } else {
        echo '<p>Something went wrong, go back and try again!</p>';
    }
    
?>