<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require 'vendor/autoload.php'; // Load Composer libraries

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = htmlspecialchars(trim($_POST["name"]));
    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);
    $message = htmlspecialchars(trim($_POST["message"]));

    if (!empty($name) && !empty($email) && !empty($message)) {
        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com'; // e.g., Gmail SMTP
            $mail->SMTPAuth   = true;
            $mail->Username   = 'your-email@gmail.com'; // your email
            $mail->Password   = 'your-app-password';    // Gmail App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            // Recipients
            $mail->setFrom($email, $name);
            $mail->addAddress('your-email@gmail.com', 'Atma Biswas'); // your email again

            // Content
            $mail->isHTML(false);
            $mail->Subject = 'New Message from Atma Biswas Website';
            $mail->Body    = "Name: $name\nEmail: $email\nMessage:\n$message";

            $mail->send();
            echo 'Message has been sent successfully.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Please fill in all fields.";
    }
}