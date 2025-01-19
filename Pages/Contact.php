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
            background-color: #e6f2ff;
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
            background-color: #ffffff;
            border-bottom: 2px solid #0073e6;
            width: 100%;
        }
        .navbar .top-row {
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 5px 0;
        }
        .navbar .top-row a {
            color: #0073e6;
            text-decoration: none;
            margin: 0 10px;
            padding: 7px 10px;
            transition: background-color 0.3s, color 0.3s;
            border-radius: 15px;
        }
        .navbar .top-row a:hover {
            background-color: #0073e6;
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
            background-color: #005bb5;
            color: #ffffff;
        }
        .logo {
            font-size: 1.5rem;
            margin-left: 1rem;
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
            width: 80%;
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

        .contact-card {
            display: flex;
            flex-wrap: wrap;
            width: 80%;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #0073e6;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .contact-info {
            flex: 1;
            padding: 20px;
            display: flex;
            flex-direction: column;
            gap: 15px;
            color: #0073e6;
        }

        .contact-info h2 {
            margin: 0;
            color: #005bb5;
        }

        .contact-info p {
            margin: 5px 0;
            font-size: 1rem;
        }

        .contact-info .contact-btn {
            background-color: #0073e6;
            color: #ffffff;
            border: none;
            padding: 10px 15px;
            border-radius: 5px;
            cursor: pointer;
            transition: background-color 0.3s;
        }

        .contact-info .contact-btn:hover {
            background-color: #005bb5;
        }

        .map-container {
            flex: 1;
            min-height: 300px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

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

            .contact-card {
                flex-direction: column;
            }
            .map-container {
                height: 200px;
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
            <div class="logo">ATMA BISWAS</div>
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
        <p>Contact Us..</p>
        <select>
            <option value="option1">ATMABISWAS HQ</option>

        </select>
    </div>

    <div class="contact-card">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Branch:</strong> ATMABISWAS, Main Office</p>
            <p><strong>Address:</strong> 123 Main Street, Dhaka, Bangladesh</p>
            <p><strong>Phone:</strong> +880-123-456-789</p>
            <p><strong>Email:</strong> contact@atmabiswas.org</p>
            <button class="contact-btn">Send Us a Message</button>
        </div>
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1218845770115!2d90.38619631536396!3d23.807097992000845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b908896c17%3A0xa04f51e926d2f5a3!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1615917324239!5m2!1sen!2sbd" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>

    <div class="select-container">
        <p>Select a branch...</p>
        <select>
            <option value="option1">ATMABISWAS HQ</option>

        </select>
    </div>

    <div class="contact-card">
        <div class="contact-info">
            <h2>Contact Us</h2>
            <p><strong>Branch:</strong> ATMABISWAS, Main Office</p>
            <p><strong>Address:</strong> 123 Main Street, Dhaka, Bangladesh</p>
            <p><strong>Phone:</strong> +880-123-456-789</p>
            <p><strong>Email:</strong> contact@atmabiswas.org</p>
            <button class="contact-btn">Send Us a Message</button>
        </div>
        <div class="map-container">
            <iframe 
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1218845770115!2d90.38619631536396!3d23.807097992000845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b908896c17%3A0xa04f51e926d2f5a3!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1615917324239!5m2!1sen!2sbd" 
                width="100%" 
                height="100%" 
                style="border:0;" 
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
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
