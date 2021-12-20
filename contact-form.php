<?php

if(isset($_POST['submit'])){
    $first_name = $_POST['Fname'];
    $last_name =$_POST['Lname'];
    $sender_email = $_POST['sender_email'];
    $message_subject =$_POST['email_subject'];
    $email_body = $_POST['email_body'];


    $mailTo = "emmysoetan@gmail.com";

    $headers = "From: ".$sender_email;

    $message = "You have an email form ". $first_name.$last_name.".\n\n".$email_body;


    mail($mailTo, $message_subject,$message,$headers);
}

?>