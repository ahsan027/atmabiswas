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

    width: 95vw;
    display: flex;
    gap: 20px;
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
    max-width: 1200px;
    margin: 2% auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    opacity: 0;
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

/* Responsive Styles */
@media (max-width: 768px) {
    body{
        padding: 1rem;
    }
   

    .container_aboutus {
        width: 100%;
        margin: 0;
        padding: 10px;
        margin-right: 1rem;
        border-radius: 5px;
    }

    h1, h2 {
        font-size: 1.5rem;
    }

    p, ul {
        font-size: 1rem;
    }
}

        @media (min-width:768px) {
            .container_aboutus{
                padding: 1rem;
            }
            
        }
    </style>
</head>
<body>
    <div>
        <?php include 'Navbar.php'?>
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


    <script src="index.js">
       

    </script>
</body>
</html>
