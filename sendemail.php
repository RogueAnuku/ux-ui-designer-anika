<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST["first_name"];
    $email = $_POST["email"];
    $message = $_POST["message"];

    $to = "anika.mcphee@gmail.com "; // Replace with your email address
    $subject = "Contact Form Submission from $name";
    $headers = "From: $email";
    $message = "Name: $name\nEmail: $email\nMessage:\n$message";

    if (mail($to, $subject, $message, $headers)) {
        // Email sent successfully
        echo "Thank you for your message. We'll get back to you soon.";
    } else {
        // Email could not be sent
        echo "Oops! Something went wrong. Please try again later.";
    }
}
?>
