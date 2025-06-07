<?php
include '../Database/db.php';
session_start();

$nameErr = "";
$nameflag = false;


$passErr = "";

$passresult = [];
$passflag = false;

$database = new Db();
$database->connect();



function validatePassword($password)
{
    $errors = [];


    if (strlen($password) < 8) {
        $errors[] = "Password must be at least 8 characters long.";
    }

    if (!preg_match('/[A-Z]/', $password)) {
        $errors[] = "Password must contain at least one uppercase letter.";
    }
    if (!preg_match('/[a-z]/', $password)) {
        $errors[] = "Password must contain at least one lowercase letter.";
    }
    if (!preg_match('/[0-9]/', $password)) {
        $errors[] = "Password must contain at least one digit.";
    }
    if (!preg_match('/[\W]/', $password)) {
        $errors[] = "Password must contain at least one special character (e.g., @, #, $, etc.).";
    }
    return $errors;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $database = new Db();
    $connection = $database->connect();


    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);

    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    $username = filter_input(INPUT_POST, "username", FILTER_VALIDATE_EMAIL);

    if (empty($username)) {
        $nameflag = true;
        $nameErr = "Email is Required";
    }

    if (empty($password)) {
        $passflag = true;
        $passErr = "Password is Required";
    }

    $passresult = validatePassword($password);

    if ($username && empty($passresult)) {

        $sql = "SELECT * FROM admins WHERE username=:username AND pswd=:password";

        $stmt = $connection->prepare($sql);

        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);

        $stmt->execute();

        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($res)) {
            echo "<p class='error'>INVALID CREDENTIALS</p>";
        } else {
            $_SESSION['username'] = $username;
            header("Location: ../DashBoard/dashboard.php");
        }
    }
}

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMABISWAS - Login</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <link rel="stylesheet" href="css/login.css">
    <link rel="stylesheet" type="text/css" href="../Assets/css/login-signup.css">
</head>

<body>
    <div class="wrapper">
        <div class="box">
            <form action="" method="POST">
                <img src="../images/logo/logo.png">
                <h1>Welcome to, ATMABISWAS Dashboard</h1>
                <div class="username">
                    <input type="text" name="username" placeholder="Email" value="">

                    <i class="fa-regular fa-envelope"></i>
                    <?php
                    if ($nameflag) {
                        echo "<p class='error'> $nameErr</p>";
                    }
                    ?>
                </div>
                <div class="password">
                    <input type="password" name="password" placeholder="Password" value="">
                    <i class="fa-solid fa-lock"></i>
                </div>
                <button id="btn" type="submit">Login</button>

            </form>
        </div>
    </div>
</body>

</html>