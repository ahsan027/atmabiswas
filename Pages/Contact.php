<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Active Page and Stylish Select</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background-color: #e6f2ff; /* Light blue background */
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }
        .navbar {
            display: flex;
            flex-direction: column;
            padding: 20px;
            background-color: #ffffff; /* White background for navbar */
            border-bottom: 2px solid #0073e6; /* Blue border at the bottom */
            width: 100%; /* Full width navbar */
        }
        .navbar .top-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
        }
        .navbar .top-row a {
            color: #0073e6; /* Blue color for links */
            text-decoration: none;
            margin: 0 10px;
            padding: 7px 10px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 15px;
        }
        .navbar .top-row a:hover {
            background-color: #0073e6; /* Blue hover effect */
            color: #ffffff;
        }
        .navbar .bottom-row {
            display: flex;
            justify-content: center;
            align-items: center;
            gap: 2rem;
            margin-top: 10px;
        }
        .navbar .bottom-row a {
            color: #0073e6;
            text-decoration: none;
            padding: 10px 15px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 15px;
        }
        .navbar .bottom-row a:hover {
            background-color: #0073e6;
            color: #ffffff;
        }
        .navbar .bottom-row a.active {
            background-color: #005bb5; /* Darker blue for active page */
            color: #ffffff;
        }
        .logo {
            font-size: 1.5rem;
            color: #0073e6;
            font-weight: bold;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 40px;
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            border-radius: 10px;
            width: 400px;
            max-width: 90%;
            opacity: 0;
            transition: opacity 0.3s, transform 0.3s;
        }
        .popup.active {
            display: block;
            opacity: 1;
            transform: translate(-50%, -50%) scale(1);
        }
        .popup .close-btn {
            display: block;
            text-align: right;
            cursor: pointer;
            font-size: 1.5rem;
            color: #0073e6;
        }
        .popup form {
            display: flex;
            flex-direction: column;
            gap: 20px;
        }
        .popup form input {
            padding: 15px;
            border: 1px solid #0073e6;
            border-radius: 5px;
        }
        .popup form button {
            padding: 15px;
            border: none;
            background-color: #0073e6;
            color: #ffffff;
            cursor: pointer;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .popup form button:hover {
            background-color: #005bb5;
        }

        .select-container {
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            width: 80%; /* 80% width of the page */
            margin: 20px 0;
        }
        .select-container p {
            margin-bottom: 10px;
            font-size: 1.2rem;
            color: #0073e6;
        }
        .select-container select {
            width: 100%;
            padding: 10px;
            border: 1px solid #0073e6;
            border-radius: 5px;
            font-size: 1rem;
            background-color: #ffffff;
            color: #0073e6;
            cursor: pointer;
            transition: border-color 0.3s, box-shadow 0.3s;
        }
        .select-container select:focus {
            border-color: #005bb5;
            box-shadow: 0 0 10px rgba(0, 115, 230, 0.5);
            outline: none;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .navbar .top-row {
                justify-content: space-between;
            }
            .navbar .top-row .menu-toggle {
                display: block;
                cursor: pointer;
                font-size: 1.5rem;
                color: #0073e6;
            }
            .navbar .top-row a {
                display: none;
            }
            .navbar .bottom-row {
                display: none;
                flex-direction: column;
            }
            .navbar .bottom-row.active {
                display: flex;
                gap: 1rem;
            }
        }

        @media (min-width: 769px) {
            .navbar .top-row .menu-toggle {
                display: none;
            }
            .navbar .top-row a {
                display: inline;
            }
        }
    </style>
</head>
<body>
    <div class="navbar">
        <div class="top-row">
            <div class="menu-toggle">&#9776;</div>
            <div class="logo">ATMABISWAS</div>
            <div>
                <a href="#">Notice</a>
                <a href="#">Career</a>
                <a href="#">Press</a>
                <a href="#">Event</a>
            </div>
        </div>
        <div class="bottom-row">
            <a href="../index.php">Who we are</a>
            <a href="#">Our team</a>
            <a class="active" href="Pages/Contact.php">Contact</a>
            <a href="#">What we do</a>
            <a href="#" id="login-btn">Login</a>
        </div>
    </div>

    <div class="select-container">
        <p>Select a branch...</p>
        <select>
            <option value="option1">Option 1</option>
            <option value="option2">Option 2</option>
            <option value="option3">Option 3</option>
            <option value="option4">Option 4</option>
        </select>
    </div>

    <div class="popup" id="login-popup">
        <div class="close-btn" id="close-popup">&times;</div>
        <form>
            <input type="text" placeholder="Username" required>
            <input type="password" placeholder="Password" required>
            <button type="submit">Login</button>
        </form>
    </div>

    <script>
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.bottom-row').classList.toggle('active');
        });

        document.getElementById('login-btn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('login-popup').classList.add('active');
        });

        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('login-popup').classList.remove('active');
        });
    </script>
</body>
</html>
