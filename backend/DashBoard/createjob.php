<?php
    include '../Database/db.php';
    
    $db = new Db();
    $connection = $db->connect();

    $sql = "SELECT * FROM sectors";

    $stmt = $connection->prepare($sql);

    $stmt->execute();

    $res = $stmt->fetchAll(PDO::FETCH_ASSOC);
   
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Admin Dashboard</title>
    <script src="https://cdn.tailwindcss.com"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" />
    <link rel="stylesheet" href="css/createjob.css">
</head>

<body class="bg-gray-100 overflow-x-hidden">
    <div class="flex h-screen">
        <!-- Sidebar -->
        <?php include 'sidebar.php' ?>

        <!-- Main Content -->
        <div class="flex-1 flex flex-col">
            <!-- Top Navbar -->



            <!-- Content Area -->
            <div class="container">
                <header>Create Job Post</header>
                <form action="#">
                    <div class="form first">
                        <div class="details personal">
                            <span class="title">Job Details</span>
                            <div class="fields">

                                <div class="input-field">
                                    <label>Job Code</label>
                                    <input name="job_code" type="text" placeholder="Enter Job Code" required>
                                </div>

                                <div class="input-field">
                                    <label>Job Title</label>
                                    <input name="job_title" type="text" placeholder="Enter Job Title" required>
                                </div>

                                <div class="input-field">
                                    <label>Application Deadline</label>
                                    <input name="deadline" type="date" placeholder="Enter birth date" required>
                                </div>

                                <div class="input-field">
                                    <label>Job Sector</label>
                                    <select name="job_dept" required>
                                        <option disabled selected>Select Sector</option>
                                        <?php
                                            foreach($res as $r){
                                    echo "<option value=".$r["sector_name"].">".$r["sector_name"]."</option>";
                                            } 
                                        ?>


                                    </select>
                                </div>

                                <div class="input-field">
                                    <label>Job Location</label>
                                    <input name="job_location" type="number" placeholder="Enter Job Location" required>
                                </div>

                                <div class="input-field">
                                    <label>Salary Range</label>
                                    <input name="salary_range" type="text" placeholder="BDT 000 - BDT 999" required>
                                </div>
                            </div>
                        </div>
                        <div class="details ID">
                            <span class="title">Identity Details</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>ID Type</label>
                                    <input type="text" placeholder="Enter ID type" required>
                                </div>
                                <div class="input-field">
                                    <label>ID Number</label>
                                    <input type="number" placeholder="Enter ID number" required>
                                </div>
                                <div class="input-field">
                                    <label>Issued Authority</label>
                                    <input type="text" placeholder="Enter issued authority" required>
                                </div>
                                <div class="input-field">
                                    <label>Issued State</label>
                                    <input type="text" placeholder="Enter issued state" required>
                                </div>
                                <div class="input-field">
                                    <label>Issued Date</label>
                                    <input type="date" placeholder="Enter your issued date" required>
                                </div>
                                <div class="input-field">
                                    <label>Expiry Date</label>
                                    <input type="date" placeholder="Enter expiry date" required>
                                </div>
                            </div>
                            <button class="nextBtn">
                                <span class="btnText">Next</span>
                                <i class="uil uil-navigator"></i>
                            </button>
                        </div>
                    </div>
                    <div class="form second">
                        <div class="details address">
                            <span class="title">Address Details</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Address Type</label>
                                    <input type="text" placeholder="Permanent or Temporary" required>
                                </div>
                                <div class="input-field">
                                    <label>Nationality</label>
                                    <input type="text" placeholder="Enter nationality" required>
                                </div>
                                <div class="input-field">
                                    <label>State</label>
                                    <input type="text" placeholder="Enter your state" required>
                                </div>
                                <div class="input-field">
                                    <label>District</label>
                                    <input type="text" placeholder="Enter your district" required>
                                </div>
                                <div class="input-field">
                                    <label>Block Number</label>
                                    <input type="number" placeholder="Enter block number" required>
                                </div>
                                <div class="input-field">
                                    <label>Ward Number</label>
                                    <input type="number" placeholder="Enter ward number" required>
                                </div>
                            </div>
                        </div>
                        <div class="details family">
                            <span class="title">Family Details</span>
                            <div class="fields">
                                <div class="input-field">
                                    <label>Father Name</label>
                                    <input type="text" placeholder="Enter father name" required>
                                </div>
                                <div class="input-field">
                                    <label>Mother Name</label>
                                    <input type="text" placeholder="Enter mother name" required>
                                </div>
                                <div class="input-field">
                                    <label>Grandfather</label>
                                    <input type="text" placeholder="Enter grandfther name" required>
                                </div>
                                <div class="input-field">
                                    <label>Spouse Name</label>
                                    <input type="text" placeholder="Enter spouse name" required>
                                </div>
                                <div class="input-field">
                                    <label>Father in Law</label>
                                    <input type="text" placeholder="Father in law name" required>
                                </div>
                                <div class="input-field">
                                    <label>Mother in Law</label>
                                    <input type="text" placeholder="Mother in law name" required>
                                </div>
                            </div>
                            <div class="buttons">
                                <div class="backBtn">
                                    <i class="uil uil-navigator"></i>
                                    <span class="btnText">Back</span>
                                </div>

                                <button class="sumbit">
                                    <span class="btnText">Submit</span>
                                    <i class="uil uil-navigator"></i>
                                </button>
                            </div>
                        </div>
                    </div>
                </form>
            </div>

        </div>
    </div>
    <script src="js/dashboard.js"></script>
    <script src="js/createjob.js"></script>

</body>

</html>