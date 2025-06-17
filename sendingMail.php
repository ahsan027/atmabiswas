<?php

include 'backend/Database/db.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;

$db = new Db();
$conn = $db->connect();

require '/vendor/phpmailer/phpmailer/src/Exception.php';

require '/vendor/phpmailer/phpmailer/src/PHPMailer.php';

require '/vendor/phpmailer/phpmailer/src/SMTP.php';


$uploadDir = "/uploads/application_cvs/";


if (!file_exists($uploadDir)) {

    mkdir($uploadDir, 0755, true);
}

function processPdf($pdfFile, $maxSize, $allowedTypes, $uploadDir)
{

    $fileInfo = new finfo(FILEINFO_MIME_TYPE);
    $mimetype = $fileInfo->file($pdfFile["tmp_name"]);

    if ($pdfFile["error"] !== UPLOAD_ERR_OK) {
        echo "<p>An Error Occurd!</p>";
        exit();
    }

    if (!in_array($mimetype, $allowedTypes)) {
        echo "<p>Invalid File Type</p>";
        exit();
    }

    if ($pdfFile['size'] > $maxSize) {
        echo "<p>File size is too Large</p>";
        exit();
    }

    $ext = pathinfo($pdfFile["name"], PATHINFO_EXTENSION);

    $newFileName = "CvApplication_" . $_POST['fullname'] . "_" . date("Y-m-d") . "_" . random_int(0, 100) . "." . $ext;

    $target = $uploadDir . $newFileName;

    if (!move_uploaded_file($pdfFile["tmp_name"], $target)) {
        echo "<p>Error Occurd While Uploading</p>";
        exit();
    }

    return $target;
}


if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $jobId = $_POST["job_id"];

    $jobCode = $_POST["job_code"];

    $jobTitle = $_POST["job-title"];

    $fullName = htmlspecialchars(trim($_POST["fullname"]));

    $email = filter_var(trim($_POST["email"]), FILTER_SANITIZE_EMAIL);

    $phone = htmlspecialchars(trim($_POST["phone"]));


    $mailBody = htmlspecialchars(trim($_POST["mailbody"]));

    $allowedTypes = ["application/pdf"];
    $maxSize = 5 * 1024 * 1024;
    $uploadDir = "/uploads/application_cvs/";

    $cvFile = processPdf($_FILES["cvfile"], $maxSize, $allowedTypes, $uploadDir);



    $sql = "INSERT INTO cv_applications (jobId,job_title,fullname,email,phone_no,fileDir) VALUES (:job_id,:job_title,:fullname,:email,:phone_no,:fileDir)";

    $stmt = $conn->prepare($sql);

    $stmt->bindParam(":job_id", $jobId);
    $stmt->bindParam(":job_title", $jobTitle);
    $stmt->bindParam(":fullname", $fullName);
    $stmt->bindParam(":email", $email);
    $stmt->bindParam(":phone_no", $phone);
    $stmt->bindParam(":fileDir", $cvFile);

    $stmt->execute();

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

            $mail->addAddress('ahsanauddry.ndc@gmail.com', 'Ahsan Auddry'); // Set the recivers email address here.

            // Content
            $mail->isHTML(true);

            $mail->Subject = "Application for Position : {$jobTitle} - Job Id : {$jobId} - From {$fullName}";

            $mail->Body = "
            <strong>Name:</strong> {$fullName}<br>
            <strong>Email:</strong> <span style='color:blue; font-weight:bold;'>{$email}</span><br>
            <strong>Phone:</strong> <span style='color:green; font-weight:bold;'>+88{$phone}</span><br>
            <strong>Applicant's message:</strong><br>
            <p>{$mailBody}</p>
        ";


            $mail->addAttachment($cvFile);

            if($mail->send()){
            header("Location: backend/career/availablejobs.php");
                
            }else{
                echo 'Unsuccessful mail sent';
            }

        } catch (Exception $e) {
            echo $e;
        }
    } else {
        echo "Please fill in all fields.";
    }
}
