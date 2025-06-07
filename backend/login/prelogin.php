<?php
// If you need PHP logic (e.g., role checking, redirection), place it here.
// For example:
// if ($_SERVER["REQUEST_METHOD"] === "POST") {
//   // Handle login or role selection...
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Night Scene Login</title>
    <link rel="stylesheet" href="css/prelogin.css">
</head>

<body>

    <div class="container">
        <!-- Left illustration area -->
        <div class="illustration"></div>

        <!-- Right white panel -->
        <div class="right-panel">
            <div class="form-wrapper">
                <h1>Welcome to ATMABISWAS</h1>
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>


                <div class="create-account">
                    <h1>Login in as?</h1>
                </div>

                <!-- Submit Button -->
                <div class="btn-tab">

                    <a class="btn-submit">ATMABISWAS - EMPLOYEE</a>
                    <a class="btn-submit">ATMABISWAS - ADMIN</a>

                </div>

                <!-- Create account link -->
                <div class="create-account">
                    <a href="../../frontend/index.php">Back to Homepage</a>
                </div>

            </div>
        </div>
    </div>

</body>

</html>