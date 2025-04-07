<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Form Validation</title>
    <!-- Font Awesome CDN -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css">
    <!-- Inline CSS -->
    <style>
        @import url('https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100..900;1,100..900&display=swap');

        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: "Montserrat", sans-serif;
            background: linear-gradient(rgba(0, 0, 0, .5), rgba(0, 0, 0, .5)), url("images/logincover.jpg");
            background-size: cover;
            background-position: center;
        }

        .box {
            border-radius: 20px;
            width: 700px;
            padding: 30px;
            background-color: rgba(0, 0, 0, .4);
            box-shadow: 1px 1px 2px #ffc400ef;
            display: flex;
            flex-direction: column;
        }

        .box h1 {
            color: #fff;
            text-transform: uppercase;
            font-weight: 700;
            display: flex;
            align-items: center;
            justify-content: center;
        }

        .username,
        .password {
            position: relative;
        }

        .fa-regular.fa-envelope,
        .fa-solid.fa-lock {
            position: absolute;
            left: 5px;
            top: 13px;
            color: rgb(256, 256, 256);
        }
        .fa-regular.fa-envelope,
        .fa-solid.fa-lock {
            font-size: 2rem;
            color: rgb(256, 256, 256);
        }
        .box input[type="text"],
        .box input[type="password"] {
            font-size: 20px;
            border: none;
            background: none;
            display: block;
            margin: 30px auto;
            text-align: center;
            border: 3px solid #fff;
            padding: 14px 10px;
            width: 550px;
            color: #fff;
            border-radius: 24px;
            transition: all .2s ease-in;
            outline: none;
        }

        .box input[type="text"]:focus,
        .box input[type="password"]:focus {
            border-color: #0367fd;
        }

        .wrapper {
            display: flex;
            height: 100vh;
            align-items: center;
            justify-content: center;
        }

        #btn {
            background: none;
            display: block;
            margin: 20px auto;
            text-align: center;
            border: 3px solid #0367fd;
            padding: 14px 35px;
            outline: none;
            font-size: 18px;
            font-weight: 700;
            color: rgb(256, 256, 256);
            border-radius: 20px;
            transition: all .2s ease-in-out;
            cursor: pointer;
        }

        #btn:hover {
            background-color: #0367fd;
        }
    </style>
</head>
<body>
    <div class="wrapper">
        <div class="box">
            <form action="">
                <h1>Login</h1>
                <div class="username">
                    <input type="text" placeholder="Enter Email Address" id="username" autocomplete="off" required>
                    <i class="fa-regular fa-envelope"></i>
                </div>
                <div class="password">
                    <input type="password" placeholder="Enter password" id="password" autocomplete="off" required>
                    <i class="fa-solid fa-lock"></i>
                </div>
                <button id="btn" type="submit">Login</button>
            </form>
        </div>
    </div>
</body>
</html>