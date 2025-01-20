<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - ATMA BISWAS</title>
    <style>
        /* General Styles */
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-color: #e6f2ff;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        /* Navbar Styles */
        .navbar {
            width: 100%;
            background-color: #ffffff;
            border-bottom: 2px solid #0073e6;
            padding: 10px 20px;
        }
        .navbar .logo {
            font-size: 1.5rem;
            color: #0073e6;
            font-weight: bold;
        }
        .navbar .links {
            display: flex;
            justify-content: center;
            gap: 1.5rem;
            margin-top: 10px;
        }
        .navbar .links a {
            text-decoration: none;
            color: #0073e6;
            font-size: 1rem;
            padding: 10px 15px;
            border-radius: 5px;
            transition: background-color 0.3s;
        }
        .navbar .links a:hover {
            background-color: #0073e6;
            color: #ffffff;
        }
        .navbar .links a.active {
            background-color: #005bb5;
            color: #ffffff;
        }

        /* Toggle Button */
        .branch-toggle-btn {
            padding: 10px 20px;
            font-size: 1rem;
            margin: 20px 0;
            border: 1px solid #0073e6;
            border-radius: 5px;
            background-color: #ffffff;
            color: #0073e6;
            cursor: pointer;
            transition: background-color 0.3s, color 0.3s;
        }
        .branch-toggle-btn:hover {
            background-color: #0073e6;
            color: #ffffff;
        }

        /* Contact Card */
        .contact-card {
            display: none;
            flex-wrap: wrap;
            width: 80%;
            background-color: #ffffff;
            border: 1px solid #0073e6;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            margin-bottom: 20px;
        }
        .contact-card.active {
            display: flex;
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
            border: none;
        }

        @media (max-width: 768px) {
            .contact-card {
                flex-direction: column;
            }
            .map-container {
                height: 200px;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <div class="navbar">
        <div class="logo">ATMA BISWAS</div>
        <div class="links">
            <a href="../index.php">Who We Are</a>
            <a href="Pages/OurTeam.php">Our Team</a>
            <a class="active" href="Pages/Contact.php">Contact</a>
            <a href="#">What We Do</a>
            <a href="#">Login</a>
        </div>
    </div>

    <!-- Toggle Button -->
    <button class="branch-toggle-btn" id="toggle-btn">ATMABISWAS HQ</button>

    <!-- Contact Card -->
    <div class="contact-card" id="contact-card">
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
                allowfullscreen="" 
                loading="lazy">
            </iframe>
        </div>
    </div>

    <script>
        // Toggle Contact Card Visibility
        document.getElementById('toggle-btn').addEventListener('click', function () {
            const contactCard = document.getElementById('contact-card');
            contactCard.classList.toggle('active');
        });
    </script>
</body>
</html>
