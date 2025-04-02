<?php
    include '../../Database/db.php';


    $db = new Db();

    $connection = $db->connect();

    $sql = "INSERT INTO jobs (job_code,job_title,deadline,job_dept,job_location,salary_range,job_experience,job_skillset,job_description,job_req) VALUES (:job_code,:job_title,:deadline,:job_dept,:job_location,:salary_range,:job_experience,:job_skillset,:job_description,:job_req)";

    $stmt = $connection->prepare($sql);
    $job_code;$job_title;$deadline;$job_dept;$job_location;$salary_range;$job_experience;$job_skillset;$job_description;$job_req = htmlspecialchars($_POST["job_code"]);htmlspecialchars($_POST["job_title"]);htmlspecialchars($_POST["deadline"]);htmlspecialchars($_POST["job_dept"]);htmlspecialchars($_POST["job_location"]);htmlspecialchars($_POST["salary_range"]);htmlspecialchars($_POST["job_experience"]);htmlspecialchars($_POST["job_skillset"]);htmlspecialchars($_POST["job_description"]);htmlspecialchars($_POST["job_req"]);


    $newArray = [$job_code,$job_title,$deadline,$job_dept,$job_location,$salary_range,$job_experience,$job_skillset,$job_description,$job_req ];


    print_r($newArray);
?>