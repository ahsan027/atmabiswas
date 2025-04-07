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
  <meta name="viewport" content="width=device-width, initial-scale=1.0"/>
  <title>Night Scene Login</title>
  <style>
    @import url('https://fonts.googleapis.com/css2?family=Montserrat:wght@400;700&display=swap');
    @import url('https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/css/all.min.css');

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Montserrat', sans-serif;
      background: url('images/prelogincover copy.jpg');  /* fallback gradient if image doesn't load */
      min-height: 100vh;
      display: flex;
      align-items: center;
      justify-content: center;
    }

    /* Main container holds the entire split layout */
    .container {
      width: 90%;
      max-width: 1100px;
      min-height: 600px;
      display: flex;
      background: #f0f0f0; /* fallback behind the left illustration */
      box-shadow: 0 15px 30px rgba(0, 0, 0, 0.3);
      border-radius: 8px;
      overflow: hidden; /* ensures round corners if needed */
      z-index: 1000;
    }

    /* Left side: background illustration */
    .illustration {
      flex: 1.2; /* bigger portion for the illustration */
      background: url('images/prelogincover.jpg') no-repeat center center/cover;
      position: relative;
    }

    /* Right side: white panel for form */
    .right-panel {
      flex: 1;
      background: #ffffff;
      display: flex;
      flex-direction: column;
      justify-content: center;
      padding: 40px;
    }

    /* Content wrapper in the right panel */
    .form-wrapper {
      max-width: 300px;
      margin: 0 auto;
    }

    .form-wrapper h1 {
      font-size: 2rem;
      margin-bottom: 0.5rem;
      color: #2C3E50;
    }

    .form-wrapper p {
      font-size: 0.9rem;
      color: #7f8c8d;
      margin-bottom: 2rem;
      line-height: 1.5;
    }

    /* Form fields container */
    .input-group {
      position: relative;
      margin-bottom: 1.2rem;
    }

    .input-group input {
      width: 100%;
      padding: 14px 14px 14px 40px; /* left padding to make room for icon */
      border: 1px solid #ddd;
      border-radius: 4px;
      font-size: 0.95rem;
      outline: none;
      transition: border-color 0.3s;
    }

    .input-group input:focus {
      border-color: #3498db;
    }

    /* Icons inside input fields */
    .input-group .icon {
      position: absolute;
      top: 50%;
      left: 12px;
      transform: translateY(-50%);
      color: #999;
      font-size: 0.9rem;
    }

    /* Remember and Forgot password row */
    .options {
      display: flex;
      align-items: center;
      justify-content: space-between;
      font-size: 0.85rem;
      margin-bottom: 1.5rem;
      color: #666;
    }

    .options label {
      display: flex;
      align-items: center;
      cursor: pointer;
    }

    .options input[type="checkbox"] {
      margin-right: 6px;
    }

    .options a {
      text-decoration: none;
      color: #3498db;
      transition: color 0.2s;
    }

    .options a:hover {
      color: #1b73a7;
    }

    /* NEXT button */
    .btn-submit {
      width: 100%;
      padding: 14px;
      border: none;
      border-radius: 4px;
      font-size: 1rem;
      font-weight: 600;
      cursor: pointer;
      background: #3498db;
      color: #fff;
      transition: background 0.3s;
    }

    .btn-submit:hover {
      background: #2980b9;
    }

    /* Create account link */
    .create-account {
      text-align: center;
      margin-top: 1.5rem;
      font-size: 0.85rem;
    }

    .create-account a {
      color: #3498db;
      text-decoration: none;
      transition: color 0.2s;
    }

    .create-account a:hover {
      color: #1b73a7;
    }

    /* Responsive behavior */
    @media (max-width: 900px) {
      .container {
        flex-direction: column;
        min-height: auto;
      }
      .illustration {
        flex: none;
        height: 300px;
      }
      .right-panel {
        flex: none;
        padding: 20px;
      }
    }
  </style>
</head>
<body>

<div class="container">
  <!-- Left illustration area -->
  <div class="illustration"></div>

  <!-- Right white panel -->
  <div class="right-panel">
    <div class="form-wrapper">
      <h1>HELLO!</h1>
      <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>

      <form action="" method="POST">
        <!-- Email/Username -->
        <div class="input-group">
          <span class="icon"><i class="fas fa-user"></i></span>
          <input type="text" name="username" placeholder="email or username" required>
        </div>

        <!-- Password -->
        <div class="input-group">
          <span class="icon"><i class="fas fa-lock"></i></span>
          <input type="password" name="password" placeholder="password" required>
        </div>

        <!-- Options row -->
        <div class="options">
          <label>
            <input type="checkbox" name="remember">
            Remember
          </label>
          <a href="#">Forgot your password?</a>
        </div>

        <!-- Submit Button -->
        <button class="btn-submit" type="submit">NEXT</button>

        <!-- Create account link -->
        <div class="create-account">
          <a href="#">Create account</a>
        </div>
      </form>
    </div>
  </div>
</div>

</body>
</html>
