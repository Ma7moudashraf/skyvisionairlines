<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize input
    $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
    $email = filter_var($_POST['email'], FILTER_SANITIZE_EMAIL);
    $phone = filter_var($_POST['phone'], FILTER_SANITIZE_STRING);
    $message = filter_var($_POST['notes'], FILTER_SANITIZE_STRING);
    $company = filter_var($_POST['company'], FILTER_SANITIZE_STRING);
    $formType = filter_var($_POST['formType'], FILTER_SANITIZE_STRING);

    // Validate email
    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "error";
        exit;
    }

    // Set up email details
    $to = "info@skyvisionairline.com"; // Replace with your email
    $subject = "Contact Form Submission from $name";
    $body = "Name: $name\nEmail: $email\nPhone: $phone\n\nMessage:\n$message\n\ncompany:\n$company\n\nformType:\n$formType";
    $headers = "From: $email";

    // Send email
    if (mail($to, $subject, $body, $headers)) {
        echo "success";
    } else {
        echo "error";
    }
}
