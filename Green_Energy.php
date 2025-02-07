<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Green Energy, Beautiful Earth</title>
    <style>
        * {
            padding: 0;
            margin: 0;
            box-sizing: border-box;
        }
        body {
            overflow-x: hidden;
            background: #f0f8ff;
            color: #333;
            font-family: Arial, sans-serif;
        }
        header {
            text-align: center;
            background: linear-gradient(90deg, #0a58ca, #176cc6);
            color: white;
            padding: 50px 20px;
        }
        header h1 {
            font-size: 2rem;
            font-weight: 700;
        }
        header p {
            font-size: 1.2rem;
            opacity: 0.9;
        }
        .content {
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
            text-align: center;
        }
        .content p {
            font-size: 1.2em;
            line-height: 1.6;
            margin-bottom: 20px;
        }
        .container {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
            padding: 20px;
            max-width: 1200px;
            margin: 0 auto;
        }
        .card {
            background: white;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 15px rgba(0, 0, 0, 0.1);
            transition: 0.4s ease;
            width: 350px;
            text-align: center;
        }
        .card:hover {
            transform: scale(1.05);
            box-shadow: 0 15px 25px rgba(0, 0, 0, 0.2);
        }
        .card img {
            width: 100%;
            height: 220px;
            object-fit: cover;
        }
        .card-content {
            padding: 20px;
        }
        .card-content h3 {
            font-size: 1.5em;
            color: #00796b;
            margin-bottom: 10px;
        }
        .card-content p {
            font-size: 1em;
            color: #555;
        }
        .latest-pictures {
            text-align: center;
            margin-top: 40px;
        }
        .latest-pictures h2 {
            font-size: 1.8em;
            margin-bottom: 10px;
        }
        .latest-pictures img {
            width: 180px;
            height: 140px;
            object-fit: cover;
            margin: 10px;
            border-radius: 10px;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
        }
        footer {
            background: #00796b;
            color: white;
            text-align: center;
            padding: 15px 0;
            margin-top: 40px;
            font-size: 0.9em;
        }
        @media (max-width: 768px) {
            .card {
                width: 90%;
            }
            .latest-pictures img {
                width: 100px;
                height: 75px;
            }
        }
    </style>
</head>
<body>
    <?php include 'Navbar.php' ?>
    <header>
        <h1>Advancing Green Energy for a Sustainable Future</h1>
        <p>ATMABISWAS promotes renewable energy solutions to reduce carbon footprints and ensure energy accessibility.</p>
    </header>
    <div class="content">
        <p>ATMABISWAS is actively working on two groundbreaking initiatives: <strong>Bondhu Chula</strong> and <strong>Souro Shokti</strong>. These projects aim to provide clean energy alternatives and promote sustainability across communities.</p>
    </div>
    <div class="container">
        <div class="card">
            <img src="Bondhu Chula/bondhu_chula1.jpeg" alt="Bondhu Chula">
            <div class="card-content">
                <h3>ATMABISWAS Bondhu Chula</h3>
                <p>A cleaner, more efficient cooking stove reducing indoor pollution and improving rural household health.</p>
            </div>
        </div>
        <div class="card">
            <img src="Bondhu Chula/bondhu_chula2.avif" alt="Souro Shokti">
            <div class="card-content">
                <h3>ATMABISWAS Souro Shokti</h3>
                <p>Harnessing solar energy to provide sustainable and affordable electricity to remote communities.</p>
            </div>
        </div>
    </div>
    <div class="latest-pictures">
    <h1 style="text-align: center; color:  #0a58ca;">OUR WORK IN ACTION</h1>
        <p>Supporting sustainable practices through solar energy and traditional clean cooking methods.</p>
        <img src="Bondhu Chula/bondhu_chula2.jpg" alt="Project Image 1">
        <img src="Bondhu Chula/bondhu_chula3.jpg" alt="Project Image 2">
        <img src="Bondhu Chula/bondhu_chula4.jpeg" alt="Project Image 1">
        <img src="Bondhu Chula/bondhu_chula5.jpeg" alt="Project Image 2">
        <img src="Bondhu Chula/bondhu_chula6.jpeg" alt="Project Image 1">
        <img src="Bondhu Chula/bondhu_chula7.jpeg" alt="Project Image 2">
    </div>
    <?php include 'footer.php' ?>
</body>
</html>