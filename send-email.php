<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $email = $_POST['email'];
    $subject = $_POST['subject'];
    $message = $_POST['message'];
    
    $to = "nathan.rocky.schaaf@gmail.com"; // Replace with your email address
    $headers = "From: $name <$email>";
    $mailBody = "Name: $name\nEmail: $email\nSubject: $subject\n\n$message";

    if (mail($to, $subject, $mailBody, $headers)) {
        echo "Message sent successfully!";
    } else {
        echo "Error sending message.";
    }
} else {
    echo "Invalid request.";
}
?>