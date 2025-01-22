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
            <a href="#">What we do</a>

            <a href="Pages/OurTeam.php">Our team</a>
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


        document.addEventListener("DOMContentLoaded", function () {
  const counters = [
    { id: "number1", end: 100, duration: 5000 },
    { id: "number2", end: 200, duration: 5500 },
    { id: "number3", end: 50, duration: 4000 },
    { id: "number4", end: 300, duration: 4500 },
  ];

  counters.forEach((counter) => {
    let startTimestamp = null;
    const step = (timestamp) => {
      if (!startTimestamp) startTimestamp = timestamp;
      const progress = Math.min(
        (timestamp - startTimestamp) / counter.duration,
        1
      );
      document.getElementById(counter.id).innerText = Math.floor(
        progress * counter.end
      );
      if (progress < 1) {
        window.requestAnimationFrame(step);
      }
    };
    window.requestAnimationFrame(step);
  });
});

    </script>
</body>
</html>
