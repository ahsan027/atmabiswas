<?php

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
                <form class="form" action="loginProcess.php" method="POST">
                    <div class="form-group">
                        <label>Username</label>
                        <input type="text" name="username" placeholder="User name" value="">
                    </div>
                    <div class="form-group">
                        <label>Password</label>
                        <input type="password" name="password" placeholder="Password" value="">
                    </div>
                    <div class="form-group">
                        <label>Role:</label><br />
                        <select name="role">
                            <option value="Admin">Admin</option>
                            <option value="Instructor">Instructor</option>
                            <option value="Student">Student</option>
                        </select>
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