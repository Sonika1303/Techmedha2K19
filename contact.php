<?php

if(isset($_POST['submit']))
{
    $name = $_POST['name'];
    $email = $_POST['email'];
    $contact = $_POST['contact'];
    $message = $_POST['message'];
    $subject = $_POST['subject'];
    $content="From: $name \n Email: $email \n Message: $message";
    $recipient = "bbit.techmedha@gmail.com";
    $mailheader = "From: $email \r\n";

    mail($recipient, $subject, $content, $mailheader) or die("Error!");
    
}

?>