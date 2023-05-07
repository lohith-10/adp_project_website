<?php
$name = $_POST['name'];
$visitor_email = $_POST['email'];
$subject = $_POST['subject'];
$message = $POST['message'];

$email_from = 'lohithlokesh100@gamil.com';

$email_subject = 'new form submission';

$email_body = "user name: $name.\n".
"user email: $visitor_email.\n".
"subject: $subject.\n".
"user message: $message.\n.";

$to = 'lraghuram14@gmail.com';

$headers = "from: $email_from \r\n";

$headers .= "reply-to: $visitor_email \r\n";

mail($to,$email_subject,$email_body,$header);

header("location: contact.html");

?>