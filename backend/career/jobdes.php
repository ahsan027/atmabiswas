<?php
include '../Database/db.php';
$database = new Db();
$connection = $database->connect();
$connection1 = $database->connect();


$jobId = htmlspecialchars($_GET['id']);
$jobCode = htmlspecialchars($_GET['deptCode']);

$sql = "SELECT * FROM jobs WHERE job_id =:job_id";

$stmt = $connection->prepare($sql);
$stmt->bindParam(":job_id", $jobId);
$stmt->execute();
$jobDes = $stmt->fetchAll(PDO::FETCH_ASSOC);

$sql1 = "SELECT count(*) as vacency FROM jobs WHERE job_code=:job_code;";
$stmt1 = $connection1->prepare($sql1);
$stmt1->bindParam(":job_code", $jobCode);
$stmt1->execute();
$deptCode = $stmt1->fetchAll(PDO::FETCH_ASSOC);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Job Details - Senior Software Engineer</title>
    <link rel="stylesheet" href="css/jobdes.css">
</head>

<body>
    <div class="container">
        <div class="job-header">
            <h1 class="job-title"><?= $jobDes[0]['job_title'] ?></h1>
            <div class="company-info">
                <img src="../images/logo/logo.png" alt="Company Logo" class="company-logo">
                <div>
                    <h3>ATMABISWAS.</h3>
                    <p>A non-profitable Organisation</p>
                </div>
            </div>
            <div class="job-meta">
                <div class="meta-item">
                    <i class="fas fa-map-marker-alt"></i>
                    <span><?= $jobDes[0]['job_location'] ?>, Bangladesh</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-clock"></i>
                    <span>Full-time</span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-calendar-times"></i>
                    <span>DeptCode: <?= $jobCode ?></span>
                </div>
                <div class="meta-item">
                    <i class="fas fa-calendar-times"></i>
                    <span class="deadline">Application Deadline: <?= $jobDes[0]['deadline'] ?></span>
                </div>

            </div>
        </div>

        <div class="job-content">
            <div class="main-content">
                <div class="section">
                    <h2>Job Description</h2>
                    <p>We are looking for a skilled <strong
                            style="color:#3498db;"><?= $jobDes[0]['job_title'] ?></strong>
                        who has expertise in
                        <strong><?= $jobDes[0]['job_skillset'] ?></strong> To join our growing team...
                    </p>
                    <br>
                    <ul>
                        <?php
                        $des = explode(".", $jobDes[0]['job_description']);
                        foreach ($des as $d) {
                            echo '<li>' . $d . '</li>';
                        }

                        ?>

                    </ul>
                </div>

                <div class="section">
                    <h2>Requirements</h2>
                    <ul>
                        <?php
                        $req = explode(".", $jobDes[0]['job_req']);
                        foreach ($req as $re) {
                            echo "<li>" . $re . "</li>";
                        }
                        ?>
                    </ul>
                </div>

                <div class="section">
                    <h2>Benefits</h2>
                    <ul>
                        <?php
                        $ben = explode(".", $jobDes[0]['job_benefits']);
                        foreach ($ben as $b) {

                            echo "<li>" . $b . "</li>";
                        }
                        ?>
                    </ul>
                </div>
            </div>

            <div class="sidebar">
                <div class="section">
                    <h2>Job Overview</h2>
                    <div class="meta-item" style="margin-bottom: 15px;">
                        <i class="fas fa-calendar"></i>
                        <span>Posted: <?= $jobDes[0]['PostDate']; ?></span>
                    </div>
                    <div class="meta-item" style="margin-bottom: 15px;">
                        <i class="fas fa-users"></i>
                        <span>Vacancy: <?php
                                        echo $deptCode[0]['vacency'];
                                        ?> </span>
                    </div>
                    <div class="meta-item" style="margin-bottom: 15px;">
                        <i class="fas fa-money-bill-wave"></i>
                        <span>Salary: <?= $jobDes[0]['salary_range']; ?></span>
                    </div>
                </div>

                <button class="apply-button" onclick="openApplyModal()">Apply Now</button>
            </div>
        </div>
    </div>

    <!-- Application Modal -->
    <div class="modal" id="applyModal">
        <div class="modal-content">
            <h2>Apply for Senior Software Engineer</h2>
            <form id="applicationForm" onsubmit="handleSubmit(event)">
                <div class="form-group">
                    <label>Full Name</label>
                    <input type="text" required>
                </div>
                <div class="form-group">
                    <label>Email</label>
                    <input type="email" required>
                </div>
                <div class="form-group">
                    <label>Phone Number</label>
                    <input type="tel" required>
                </div>
                <div class="form-group">
                    <label>Cover Letter</label>
                    <textarea rows="5" required></textarea>
                </div>
                <div class="form-group">
                    <label>Upload CV</label>
                    <input type="file" required>
                </div>
                <button type="submit" class="apply-button">Submit Application</button>
                <button type="button" class="clear-filters" onclick="closeApplyModal()"
                    style="margin-top: 10px; width: auto;">Cancel</button>
            </form>
        </div>
    </div>

    <script>
    function openApplyModal() {
        document.getElementById('applyModal').style.display = 'block';
        document.getElementById('applyModal').style.overflowY = 'auto';

    }

    function closeApplyModal() {
        document.getElementById('applyModal').style.display = 'none';
    }

    function handleSubmit(event) {
        event.preventDefault();
        if (confirm('Are you sure you want to submit your application?')) {
            alert('Application submitted successfully!');
            closeApplyModal();
            // Here you would typically send the form data to a server
        }
    }

    // Close modal when clicking outside
    window.onclick = function(event) {
        const modal = document.getElementById('applyModal');
        if (event.target === modal) {
            closeApplyModal();
        }
    }
    </script>
</body>

</html>