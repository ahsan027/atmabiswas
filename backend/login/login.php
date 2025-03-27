<?php

    include '../Database/db.php';
    $nameErr = "";
    $nameflag = false;


    $passErr= "";

    $passresult = [];
    $passflag = false;

    $database = new Db();
    $database->connect();
    


    function validatePassword($password) {
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

if($_SERVER["REQUEST_METHOD"]=="POST"){
    $database = new Db();
    $connection = $database->connect();
    
    
    $username= filter_input(INPUT_POST,"username",FILTER_SANITIZE_EMAIL);
    
    $password = filter_input(INPUT_POST,"password",FILTER_SANITIZE_SPECIAL_CHARS);

    $username= filter_input(INPUT_POST,"username",FILTER_VALIDATE_EMAIL);

    if(empty($username)){
        $nameflag = true;
        $nameErr = "Email is Required";
    }

    if(empty($password)){
        $passflag = true;
        $passErr = "Password is Required";
    }

    $passresult = validatePassword($password);

    if($username && empty($passresult)){

        $sql = "SELECT * FROM admins WHERE username=:username AND pswd=:password";

        $stmt = $connection->prepare($sql);

        $stmt->bindParam(":username",$username);
        $stmt->bindParam(":password",$password);

        $stmt->execute();

        $res = $stmt->fetchAll(PDO::FETCH_ASSOC);

        if(empty($res)){
            echo "<p class='error'>INVALID CREDENTIALS</p>";

        }else{
            header("Location: loginProcess.php");
        }

    

    } 

    
}

?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login - ATMABISWAS</title>
    <link rel="stylesheet" type="text/css" href="../Assets/css/login-signup.css">
    <link rel="icon" type="image/x-icon" href="../images/logo/logo.png">
</head>

<body>
    <!--  F444ff#f -->
    <div class="wrapper">
        <div class="form-holder">
            <div class="logo">
                <img src="../images/logo/logo.png">
                <h2>SIGN IN</h2>
                <form class="form" action="" method="POST">
                    <div class="form-group">
                        <label>Email</label>
                        <input type="text" name="username" placeholder="Email" value="">
                        <?php
                        if($nameflag){
                        echo "<p class='error'> $nameErr</p>";
                        } 
                         ?>
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" value="">
                        <?php
                        if(empty($passresult)){
                            if($passflag){
                                echo "<p class='error'>$passErr </p>";

                            }
                        }else{
                            foreach($passresult as $err){
                        echo "<p class='error'> $err </p>";

                            }     
                        }
                         ?>

                    </div><br />
                    <div class="form-group">
                        <button type="submit">Login</button>
                    </div>
                    <div class="form-group">

                        <a href="../../frontend/index.php">Home Page</a>
                    </div>
                </form>
            </div>
        </div>
</body>

</html>