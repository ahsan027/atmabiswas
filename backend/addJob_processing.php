<?php


include "Database/db.php";

$database = new Db();

$conn = $database->connect();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $jobTitle = htmlspecialchars($_POST["jobtitle"]);

    $jobCode = htmlspecialchars($_POST["jobcode"]);


    $stmt = $conn->prepare("INSERT INTO jobcodes (JobTitle,JobCode) values (:job_title,:job_codes)");

    $stmt->bindParam(":job_title", $jobTitle);
    $stmt->bindParam(":job_codes", $jobCode);

    if ($stmt->execute()) {
        header("Location: Dashboard/dashboard.php");
    } else {
        echo "Failed to update values";
    }
}
