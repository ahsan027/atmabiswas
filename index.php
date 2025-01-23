<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Active Page</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
            overflow-x: hidden;
            background-color: #e6f2ff; /* Light blue background */
            margin: 0;
            padding: 0;
        }
        .navbar {
            width: 100%;
            height: 20%;
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

        .navbar .bottom-row a.active {
            background-color: #005bb5; /* Darker blue for active page */
            color: #ffffff;
        }
        .logo {
            font-size: 1.5rem;
            color: #0073e6;
            font-weight: bold;
            margin-left: 2.5rem;
        }

        .popup {
            display: none;
            position: fixed;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            padding: 30px;
            background-color: #ffffff;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.1);
            z-index: 1000;
            border-radius: 10px;
            width: 300px;
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
            font-size: 1.2rem;
            color: #0073e6;
        }
        .popup form {
            display: flex;
            flex-direction: column;
            gap: 15px;
        }
        .popup form input {
            padding: 10px;
            border: 1px solid #0073e6;
            border-radius: 5px;
        }
        .popup form button {
            padding: 10px;
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
        /* Add this to your existing CSS */
.dropdown {
    position: relative;
    display: inline-block;
}

.dropdown-content {
    display: none;
    position: absolute;
    background-color: #ffffff; /* White background for dropdown */
    min-width: 160px;
    margin-top: 0.3rem;
    box-shadow: 0px 8px 16px 0px rgba(0, 0, 0, 0.1);
    z-index: 1;
    border-radius: 10px;
    overflow: hidden;
}

.dropdown-content a {
    color: #0073e6; /* Blue color for links */
    padding: 12px 16px;
    text-decoration: none;
    display: block;
    border-bottom: 1px solid #f1f1f1; /* Light border between items */
}

.dropdown-content a:hover {
    background-color: #0073e6; /* Blue hover effect */
    color: #ffffff;
}

.dropdown:hover .dropdown-content {
    display: block;
}
/* Ensure dropdown is hidden on desktop */
.dropdown-content {
    display: none;
}

@media (max-width: 768px) {
    .dropdown .maindrop{
        display: none;
    }
    /* Always display dropdown on mobile */
    .dropdown-content {
        margin-top: -1rem;
        display: flex;
        justify-content: center;
        align-items: center;
        flex-direction: column;
        position: relative;
        min-width: 100%;
        background-color: #ffffff; /* White background for dropdown */
        box-shadow: none;
        border-radius: 0;
    }
    .dropdown .arrow {
        display: none; /* Hide arrow on mobile */
    }
}


/* Responsive Styles for Dropdown */
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
    .dropdown-content {
        position: relative;
        min-width: 100%;
    }
    .dropdown:hover .dropdown-content {
        display: block;
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


        @media (min-width: 769px) {
            .navbar .top-row .menu-toggle {
                display: none;
            }
            .navbar .top-row a {
                display: inline;
            }
        }
        @media (max-width: 768px) {
    .container {
        flex-direction: column;
        align-items: center;
    }

    .number-card {
        width: 90%;
        margin-bottom: 20px;
    }
}


        
.container {
    /* margin-left: 1rem; */
  
    width: 95vw;
    display: flex;
    gap: 20px;
    /* margin-left: 1rem; */
}

.number-card {
    background: white;
    border-radius: 10px;
    padding: 20px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    text-align: center;
    flex: 1;
}

.number-card h2 {
    font-size: 2.5rem;
    color: #0073e6;
    margin: 0;
    transition: transform 0.3s ease;
}

.number-card p {
    font-size: 1rem;
    color: #666;
    margin: 10px 0 0;
}

.number-card:hover h2 {
    transform: scale(1.1);
}

        .container_aboutus {
            width: 90%;
            margin: 2% auto;
            padding: 20px;
            background-color: #ffffff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            overflow: hidden;
            opacity:0;
            transition: opacity 2s;
        }
        .container_aboutus.show {
            opacity: 1;
        }
        h1, h2 {
            color: #0073e6;
        }
        p {
            margin: 1em 0;
        }
        ul {
            padding-left: 20px;
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
            <a class="active" href="/">Who we are</a>
            <div class="dropdown">
                <a class="maindrop" href="#">What we do<span class="arrow">&#9662;</span></a>
                <div class="dropdown-content">
                    <a href="Pages/Founder.php">Green Energy</a>
                    <a href="SeniorManagement.php">Enterprise Development</a>
                    <a href="Pages/ExecutiveGeneralBody.php">Food and Agriculture</a>
                </div>
            </div>

            <div class="dropdown">
                <a class="maindrop" href="#">Our Team <span class="arrow">&#9662;</span></a>
                <div class="dropdown-content">
                    <a href="Pages/Founder.php">Founder</a>
                    <a href="SeniorManagement.php">Senior Management</a>
                    <a href="Pages/ExecutiveGeneralBody.php">Executive and General Body</a>
                </div>
            </div>            
            <a href="Pages/Contact.php">Contact</a>
            <a href="#" id="login-btn">Login</a>
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

    <div>
        <?php include 'imageSlider.php' ?>
    </div>
<div>
        <div class="container">
        <div class="number-card">
            <h2 id="number1">0</h2>
            <p>Projects Completed</p>
        </div>
        <div class="number-card">
            <h2 id="number2">0</h2>
            <p>Happy Clients</p>
        </div>
        <div class="number-card">
            <h2 id="number3">0</h2>
            <p>Awards Won</p>
        </div>
        <div class="number-card">
            <h2 id="number4">0</h2>
            <p>Cups of Coffee</p>
        </div>
    </div>
</div>

<div>
    <div class="container_aboutus fade-in">
        <h1>About Us</h1>
        <div class="fade">
            <h2>Welcome to Atmabiswas!</h2>
            <p>We are dedicated to empowering individuals and fostering self-belief. Our mission is to create a positive impact on society by providing support, resources, and opportunities for personal growth and development.</p>
            
            <h2>Our Vision</h2>
            <p>To build a world where everyone believes in their potential and has the tools to achieve their dreams.</p>
            
            <h2>Our Mission</h2>
            <ul>
                <li>Empowerment: Providing resources and opportunities for personal and professional growth.</li>
                <li>Support: Offering guidance and assistance to individuals in need.</li>
                <li>Community: Creating a supportive network that fosters collaboration and mutual growth.</li>
            </ul>
            
            <h2>Our Values</h2>
            <ul>
                <li>Integrity: We uphold the highest standards of integrity in all our actions.</li>
                <li>Respect: We value each individual and treat everyone with respect and dignity.</li>
                <li>Innovation: We embrace change and constantly seek new ways to achieve our mission.</li>
            </ul>
            
            <h2>Our Team</h2>
            <p>Our team is composed of dedicated professionals who are passionate about making a difference. We work together to create a positive impact and support each other in our journey.</p>
            
            <h2>Get Involved</h2>
            <p>Join us in our mission to empower and support individuals. There are many ways to get involved:</p>
            <ul>
                <li>Volunteer: Share your skills and time to make a difference.</li>
                <li>Donate: Support our initiatives with your generous contributions.</li>
                <li>Partner: Collaborate with us to create impactful programs and events.</li>
            </ul>
        </div>
    </div>

</div>
    <script src="index.js">
       

    </script>
</body>
</html>
