<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
       // from the form
       $name = trim(strip_tags($_POST['name']));
       $email = trim(strip_tags($_POST['email']));
       $subject= trim(strip_tags($_POST['subject']))
       $message = htmlentities($_POST['message']);

       // set here
       $to = 'info@nomoneyinthebank.com';

       $body = <<<HTML
$message
HTML;

       $headers = "From: $email";
       $headers = "Content-type: text/html";

       // send the email
       mail($to, $subject, $body, $headers);

       // redirect
       header('contact.html');
}
?>