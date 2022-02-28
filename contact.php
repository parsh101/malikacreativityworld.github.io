<?php
$name=$_POST['name'];
$visitor_email=$_POST['email'];
$subject=$_POST['subject'];
$message=$_POST['message'];

$email_from="prashant4019540@jmit.ac.in"
$email_subject="Mew form submission";
$email_body="user Name:$Name.\n".
            "user email:$visitor_email.\n".
            "user subject:$subject.\n";
            "user message:$message.\n";
$to="prashantdhiman101@gmail.com";
$headers="from:$email_from\r\n";
$headers.="Reply_To:$visitor_email\r\n";
        mail($to,$email_subject,$email_body,$headers);
        headers("location:index.html");
?>