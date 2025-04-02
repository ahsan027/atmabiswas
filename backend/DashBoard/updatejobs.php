<?php 
    include '../Database/db.php';
    $database = new Db();
    $connection = $database->connect();
    
    $sql = "SELECT * FROM jobs";

    $stmt = $connection->prepare($sql);
    $stmt->execute();
    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Update Jobs - ATMABISWAS</title>
    <link rel="stylesheet" href="css/updatejobs.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.0/css/all.min.css">
    <link rel="icon" type="image/png" href="../images/logo/logo.png">
    <script src="https://cdn.tailwindcss.com"></script>

</head>

<body class="bg-gray-100 overflow-x-hidden">
    <div class="flex h-screen">
        <div class="flex">
            <?php include 'sidebar.php' ?>

        </div>
        <div class="flex">

            <section class="available-jobs overflow-y-auto">
                <div class="job-list">
                    <?php
foreach($res as $r){
    $endDate = new DateTime($r['deadline']);
    $currentDate = new DateTime();
    $interval = $currentDate->diff($endDate);
    $remainingDates = $interval->days;

    echo "<div class='job-card'>";
    
    // Main content link
    if($endDate > $currentDate){
        echo "<a href='../backend/career/jobdes.php?id=" . htmlspecialchars($r['job_id']) . "&deptCode=" . htmlspecialchars($r['job_code']) . "'>";
    } else {
        echo "<a href='#' style='color: gray;'>";
    }
    
    echo "<h3>".$r['job_title']."</h3>
        <p>Job id: ".$r["job_id"]."</p>
        <p>Department: ".$r['job_dept']."</p>
        <p>Salary: ".$r['salary_range']."</p>
        <p>Experience: ".$r['job_experience']."</p>";
    
    if($endDate > $currentDate){
        echo "<span>".$remainingDates." Day Remaining</span>";
    } else {
        echo "<span>Application Time ended</span>";
    }
    echo "</a>"; 
    echo "<div class='admin-buttons'>
        <a href='update_job.php?id=" . htmlspecialchars($r['job_id']) . "&deptCode=" . htmlspecialchars($r['job_code']) . "' class='update-btn'>Update</a>
        <a href='delete_job.php?id=" . htmlspecialchars($r['job_id']) . "&deptCode=" . htmlspecialchars($r['job_code']) . "' class='delete-btn'>Delete</a>
    </div>";

    echo "</div>"; 
}
?>

                </div>
            </section>

        </div>

    </div>


    <script src="js/dashboard.js"></script>
</body>

</html>