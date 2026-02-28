<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name    = $_POST['name'];
    $email   = $_POST['email'];
    $phone   = $_POST['phone'];
    $company = $_POST['company'];
    $message = $_POST['message'];

    $to = "shireesha@arcotindia.com";
    $subject = "New Enquiry Form Submission";

    $body = "
New enquiry received:

Name: $name
Email: $email
Phone: $phone
Company: $company

Message:
$message
    ";

    $headers  = "From: shireesha@arcotindia.com\r\n";
    $headers .= "Reply-To: $email\r\n";

    if (mail($to, $subject, $body, $headers)) {
        echo "Thank you! Your enquiry has been sent.";
    } else {
        echo "Sorry, mail not sent.";
    }
}
?>