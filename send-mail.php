<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name     = htmlspecialchars($_POST['name']);
    $email    = htmlspecialchars($_POST['email']);
    $phone    = htmlspecialchars($_POST['phone']);
    $location = htmlspecialchars($_POST['location']);

    $to = "business@reactorcare.com"; // your email
    $subject = "New Contact Form Submission - Reactor Care";

    $message = "
    New contact form enquiry:

    Name: $name
    Email: $email
    Phone: $phone
    Location: $location
    ";

    $headers = "From: $email\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $message, $headers)) {
        echo "Thank you! Your message has been sent.";
    } else {
        echo "Sorry, something went wrong. Please try again.";
    }
}
?>