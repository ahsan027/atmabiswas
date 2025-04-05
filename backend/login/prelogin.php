<?php

if ($_SERVER["REQUEST_METHOD"] === "POST") {
  $role = $_POST["roletype"];
  if ($role === "ATMABISWAS - ADMIN") {
    header("Location: login.php");
  } else if ($role === "ATMABISWAS - EMPLOYEE") {
    header("Location: https://www.facebook.com/");
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
        <h2>Select Role Type</h2>
        <form class="form" action="" method="POST">
          <div class="form-group">
            <select name="roletype" id="">
              <option value="" selected> Select Role Type...</option>
              <option value="ATMABISWAS - ADMIN">ATMABISWAS - ADMIN</option>
              <option value="ATMABISWAS - EMPLOYEE">ATMABISWAS - EMPLOYEE</option>

            </select>
          </div>
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