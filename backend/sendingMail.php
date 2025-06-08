<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

require '../vendor/phpmailer/phpmailer/src/Exception.php';

require '../vendor/phpmailer/phpmailer/src/PHPMailer.php';

require '../vendor/phpmailer/phpmailer/src/SMTP.php';

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $jobId = $_POST["job_id"];

    $jobCode = $_POST["job_code"];

    $jobTitle = $_POST["job-title"];

    $fullName = htmlspecialchars(trim($_POST["fullname"]));

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    $phone = htmlspecialchars(trim($_POST["phone"]));


    $mailBody = htmlspecialchars(trim($_POST["mailbody"]));


    $cvFile = $_POST["cvfile"];


    var_dump($jobId, $jobCode, $fullName, $email, $phone, $mailBody, $cvFile);

    print_r($cvFile);



    if (!empty($jobId) || !empty($jobCode) || !empty($fullName) || !empty($email) || !empty($phone) || !empty($mailBody) || !empty($cvFile)) {

        $mail = new PHPMailer(true);

        try {
            $mail->isSMTP();
            $mail->Host       = 'smtp.gmail.com';
            $mail->SMTPAuth   = true;
            $mail->Username   = 'arafat.haque.biswas@g.bracu.ac.bd';
            $mail->Password   = 'hyfzqivhgrzjnztc';    // Gmail App Password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
            $mail->Port       = 587;

            $mail->setFrom($email, $fullName);

            $mail->addAddress('arafatbiswas.edu01@gmail.com', 'Atma Biswas');

            // Content
            $mail->isHTML(false);

            $mail->Subject = `Application for Position : {$jobTitle} - Job Id : {$jobId} - From {$fullName}`;

            $mail->Body = "Name: $fullName\nEmail: $email\nPhone: +880{$phone}\nApplicant's message: \n$mailBody";

            $mail->send();
            echo 'Message has been sent successfully.';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error: {$mail->ErrorInfo}";
        }
    } else {
        echo "Please fill in all fields.";
    }
}