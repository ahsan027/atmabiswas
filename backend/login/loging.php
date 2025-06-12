<!-- ok -->
 
<?php
include '../Database/db.php';
session_start();

$database = new Db();
$connection = $database->connect();

$usernameErr = "";
$passErr = "";
$invalid = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = filter_input(INPUT_POST, "username", FILTER_SANITIZE_EMAIL);
    $password = filter_input(INPUT_POST, "password", FILTER_SANITIZE_SPECIAL_CHARS);

    if (empty($username)) {
        $usernameErr = "Email is Required";
    }

    if (empty($password)) {
        $passErr = "Password is Required";
    }

    if ($username && $password) {
        $sql = "SELECT * FROM admins WHERE username=:username AND pswd=:password";
        $stmt = $connection->prepare($sql);
        $stmt->bindParam(":username", $username);
        $stmt->bindParam(":password", $password);
        $stmt->execute();

        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if (empty($res)) {
            $invalid = "Invalid Credentials";
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

    <!-- Optional: Add the error style directly here -->
    <style>
.error {
    color: #fff;
    background-color: rgba(255, 0, 0, 0.8);
    width: 40%;
    font-size: 16px;
    margin-top: 5px;
    padding: 10px;
    border-radius: 4px;
    text-align: center;
    font-weight: bold;
    box-shadow: 0 2px 4px rgba(0, 0, 0, 0.2);

    /* Add transition for smooth movement */
    transition: transform 0.2s ease, box-shadow 0.2s ease;
}

/* On hover (for desktop) */
.error:hover {
    transform: translateY(-5px);
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.3);
}

/* On active/touch (mobile-friendly) */
.error:active {
    transform: scale(0.95);
    box-shadow: 0 1px 3px rgba(0, 0, 0, 0.2);
}


    </style>
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
                    if (strlen($usernameErr) !== 0) {
                        echo "<p class='error'>$usernameErr</p>";
                    }
                    ?>
                </div>
                <div class="password">
                    <input type="password" name="password" placeholder="Password" value="">
                    <i class="fa-solid fa-lock"></i>
                    <?php
                    if (strlen($passErr) !== 0) {
                        echo "<p class='error'>$passErr</p>";
                    }
                    ?>
                </div>
                <?php
                if (strlen($invalid) !== 0) {
                    echo "<p class='error'>$invalid</p>";
                }
                ?>

                <button id="btn" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>
