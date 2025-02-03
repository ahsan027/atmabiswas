<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMABISWAS NGO Executive Committee</title>
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
            background-color: #eef5ff;
            color: #333;
        }

        header {
            text-align: center;
            background: linear-gradient(90deg, #0a58ca, #176cc6);
            color: white;
            padding: 50px 20px;

        }

        header h1 {
            margin: 0;
            font-size: 1.8rem;
            font-weight: 700;
        }

        header p {
            margin: 10px 0;
            font-size: 1.2rem;
            opacity: 0.9;
        }

        .container {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            gap: 30px;
            padding: 40px;
        }

        .card {
            background: white;
            box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
            border-radius: 15px;
            overflow: hidden;
            width: 320px;
            transition: transform 0.3s, box-shadow 0.3s;
        }

        .card:hover {
            transform: translateY(-10px);
            box-shadow: 0 12px 25px rgba(0, 0, 0, 0.2);
        }

        .card img {
        width: 100%;
        height: auto;
        max-height: 300px; 
        object-fit: contain; 
        background-color: #fff; 
        padding: 10px;
        border-bottom: 3px solid #0a58ca;
}



        .card-body {
            padding: 20px;
            text-align: center;
        }

        .card-body h2 {
            margin: 10px 0 5px;
            font-size: 1.5rem;
            color: #0a58ca;
            font-weight: 600;
        }

        .card-body h3 {
            margin: 0;
            font-size: 1.1rem;
            color: #666;
            font-weight: 500;
        }

        .card-body p {
            margin: 15px 0 0;
            font-size: 1rem;
            line-height: 1.6;
        }

        @media (max-width: 768px) {
            .container {
                flex-direction: column;
                align-items: center;
            }

            .card {
                width: 90%;
            }
        }
    </style>
</head>
<body>
    <?php include 'Navbar.php'?>
    <header>
        <h1>Executive Committee of ATMABISWAS NGO</h1>
        <p>Empowering communities and driving sustainable development </p>
    </header>

    <div class="container">
        <div class="card">
        <img src="https://atmabiswas.org/wp-content/uploads/2024/10/cropped-Monogram-web.webp" alt="Mises Salma Asif">
            <div class="card-body">
                <h2>Mises Salma Asif</h2>
                <h3>President</h3>
                <p>A visionary leader since 1991, guiding ATMABISWAS with commitment to social empowerment.</p>
            </div>
        </div>

        <div class="card">
        <img src="https://atmabiswas.org/wp-content/uploads/2024/10/cropped-Monogram-web.webp" alt="Mst. Afroza Begum">
            <div class="card-body">
                <h2>Mst. Afroza Begum</h2>
                <h3>Vice President</h3>
                <p>Bringing extensive experience in social work to support strategic growth since 1991.</p>
            </div>
        </div>

        <div class="card">
            <img src="photos/Ed_sir.jpg" alt="Md. Akramul Haque Biswas">
            <div class="card-body">
                <h2>Md. Akramul Haque Biswas</h2>
                <h3>Secretary / Executive Director</h3>
                <p>Ensuring effective project implementation and leadership at ATMABISWAS.</p>
            </div>
        </div>

        <div class="card">
        <img src="https://atmabiswas.org/wp-content/uploads/2024/10/cropped-Monogram-web.webp" alt="Md. Iktiar Uddin">
            <div class="card-body">
                <h2>Md. Iktiar Uddin</h2>
                <h3>Treasurer</h3>
                <p>Overseeing financial management with transparency and accountability.</p>
            </div>
        </div>

        <div class="card">
        <img src="https://atmabiswas.org/wp-content/uploads/2024/10/cropped-Monogram-web.webp" alt="Nazma Shaheen">
            <div class="card-body">
                <h2>Nazma Shaheen</h2>
                <h3>Executive Member</h3>
                <p>Advancing social welfare and supporting community empowerment.</p>
            </div>
        </div>

        <div class="card">
        <img src="https://atmabiswas.org/wp-content/uploads/2024/10/cropped-Monogram-web.webp"alt="Mst. Shahana Pervin">
            <div class="card-body">
                <h2>Mst. Shahana Pervin</h2>
                <h3>Executive Member</h3>
                <p>Implementing impactful projects that uplift communities.</p>
            </div>
        </div>

        <div class="card">
        <img src="https://atmabiswas.org/wp-content/uploads/2024/10/cropped-Monogram-web.webp" alt="Md. Nazrul Islam">
            <div class="card-body">
                <h2>Md. Nazrul Islam</h2>
                <h3>Executive Member</h3>
                <p>Strengthening social advocacy and expanding ATMABISWAS’s reach.</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>
