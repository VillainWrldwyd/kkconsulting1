<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name    = htmlspecialchars($_POST['name']);
    $email   = htmlspecialchars($_POST['email']);
    $message = htmlspecialchars($_POST['message']);

    $to      = "info@kkconsulting.com"; // Koketso’s business email
    $subject = "New Contact Form Submission from $name";
    $body    = "Name: $name\nEmail: $email\n\nMessage:\n$message";
    $headers = "From: noreply@kkconsulting.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Sorry, there was an error sending your message.";
    }
}
?>