<?php


include "Database/db.php";

$database = new Db();

$conn = $database->connect();


if ($_SERVER["REQUEST_METHOD"] === "POST") {

    $jobTitle = htmlspecialchars($_POST["jobtitle"]);

    $jobCode = htmlspecialchars($_POST["jobcode"]);

    echo $jobTitle, $jobCode;
}