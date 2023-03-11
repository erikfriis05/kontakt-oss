<?php
if (isset($_POST['submit'])) {
    // Set the recipient email address
    $to = 'erik.lyder.friis@gmail.com';

    // Get the form data
    $name = $_POST['name'];
    $email = $_POST['email'];
    $message = $_POST['message'];

    // Set the email subject
    $subject = 'New message from ' . $name;

    // Build the email message
    $body = "Name: $name\nEmail: $email\nMessage: $message";

    // Set the email headers
    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";
    $headers .= "Content-Type: text/plain; charset=UTF-8\r\n";

    // Send the email
    mail($to, $subject, $body, $headers);
}
?>
