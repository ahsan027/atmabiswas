<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Responsive Navbar with Active Page</title>
    <style>

        .navbar {
            width: 100vw;
            height: 15vh;
            display: flex;
            flex-direction: column;
            padding: 10px;
            background-color: #ffffff; /* White background for navbar */
            border-bottom: 2px solid #0073e6;      
            /* margin-top: 2rem;   */
        }
        .navbar .top-row {
            /* margin-top: 2rem; */
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
            margin-left:1.5rem ;

        }

        @media (min-width){
            .logo{
            font-size: 1.5rem;
            color: #0073e6;
            font-weight: bold;
            margin-left: 1rem;

            }
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
            .navbar{
                margin-top:-1rem ;
                height: 15%;
            }
            .menu-toggle{
                margin-left: 1rem;
            }
            .logo{
                margin-left: 2rem;
            }
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
    </style>
</head>
<body>
<div class="navbar">
        <div class="top-row">
            <div class="menu-toggle">&#9776;</div>
            <div class="logo">ATMA BISWAS</div>
            <div class="bars">
                <a href="#">Notice</a>
                <a href="#">Career</a>
                <a href="#">Press</a>
                <a href="aboutus.php">About Us</a>
            </div>
        </div>
        <div class="bottom-row">
            <a href="/dashboard/atmabiswas">Who we are</a>
            <div class="dropdown">
                <a class="maindrop" href="#">What we do<span class="arrow">&#9662;</span></a>
                <div class="dropdown-content">
                    <a href="Pages/Founder.php">Green Energy</a>
                    <a href="SeniorManagement.php">Enterprise Development</a>
                    <a href="Pages/ExecutiveGeneralBody.php">Food and Agriculture</a>
                    <a href="Pages/ExecutiveGeneralBody.php">Ready to eat</a>
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
            <a href="Contact.php">Events</a>
            <a href="Contact.php">Contact</a>
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

    <script>
        console.log(window.location.href)
        document.querySelector('.menu-toggle').addEventListener('click', function() {
            document.querySelector('.nav .bottom-row').classList.toggle('active');
        });

        document.getElementById('login-btn').addEventListener('click', function(event) {
            event.preventDefault();
            document.getElementById('login-popup').classList.add('active');
        });

        document.getElementById('close-popup').addEventListener('click', function() {
            document.getElementById('login-popup').classList.remove('active');
        });

   document.addEventListener("DOMContentLoaded", function () {
    const currentLocation = location.href;
    console.log(location.href);
    const menuItems = document.querySelectorAll('.navbar .bottom-row a');
    
    menuItems.forEach(item => {
        if (item.href === currentLocation) {
            item.classList.add('active');
        }
    });
});


    </script>
</body>
</html>
