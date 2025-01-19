<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Side Toggle</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            overflow-x: hidden;
            background-color: #e6f2ff; /* Light blue background */
            margin: 0;
            padding: 0;
        }
        .navbar {
            display: flex;
            flex-direction: column;
            padding: 20px;
            background-color: #ffffff; /* White background for navbar */
            border-bottom: 2px solid #0073e6; /* Blue border at the bottom */
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

        .logo {
            font-size: 1.5rem;
            color: #0073e6;
            font-weight: bold;
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

            <a href="#">Who we are</a>
            <a href="#">Our team</a>
            <a href="#">Contact</a>
            <a href="#">What we do</a>
            <a href="#">Login</a>
        </div>
    </div>

    <script>
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.bottom-row').classList.toggle('active');
        });
    </script>
</body>
</html>
