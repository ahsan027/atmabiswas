<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Executive Committee - ATMABISWAS </title>
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {
        background-color: #eef5ff;
        color: #333;
        overflow-x: hidden;
    }

    header {
        text-align: center;
        background: linear-gradient(90deg, #0a58ca, #176cc6);
        color: white;
        padding: 40px 20px;
    }

    header h1 {
        font-size: 1.8rem;
        font-weight: 700;
    }

    header p {
        font-size: 1.2rem;
        opacity: 0.9;
    }

    .container {
        width: 100%;
        display: flex;
        flex-direction: column;
        align-items: center;
        gap: 30px;
        padding: 40px 20px;
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

    .cardhead1,
    .cardhead2 {
        display: flex;
        justify-content: space-around;
        align-items: center;
        background-color: white;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.15);
        border-radius: 15px;
        overflow: hidden;
        width: 100%;
        padding: 10px;
    }

    .cardhead1 img,
    .cardhead2 img {
        width: 20%;
        max-height: 300px;
        object-fit: contain;
        background-color: #fff;
        padding: 10px;
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

    .card-body,
    .card-body1,
    .card-body2 {
        padding: 20px;
        text-align: center;
        background-color: #fff;
    }

    .card-body h2 {
        font-size: 1.5rem;
        color: #0a58ca;
        font-weight: 600;
    }

    .card-body h3 {
        font-size: 1.1rem;
        color: #666;
        font-weight: 500;
    }

    .card-body p {
        font-size: 1rem;
        line-height: 1.6;
    }

    .mainchar {
        display: flex;
        flex-direction: column;
        width: 100%;
        gap: 1rem;
    }

    .othermembers {
        display: grid;
        grid-template-columns: repeat(3, minmax(250px, 1fr));
        gap: 20px;
        justify-content: center;
        width: 100%;
    }

    @media (max-width: 768px) {
        header {
            padding: 30px 15px;
        }

        header h1 {
            font-size: 1.5rem;
        }

        header p {
            font-size: 1rem;
        }

        .container {
            padding: 20px;
        }

        .card {
            width: 100%;
        }

        .cardhead1 img,
        .cardhead2 img {
            width: 30%;
        }

        .othermembers {
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
        }
    }
    </style>
</head>

<body>
    <?php include 'Navbar.php' ?>
    <header>
        <h1>General Body of ATMABISWAS NGO</h1>
        <p>Empowering communities and driving sustainable development </p>
    </header>

    <div class="container">
        <div class="othermembers">
            <div class="card">
                <img src="photos/ranabiswas.png" alt="Md. Iktiar Uddin">
                <div class="card-body">
                    <h2>Md. Iktiar Uddin</h2>
                    <h3>Treasurer</h3>
                    <p>Overseeing financial management with transparency and accountability.</p>
                </div>
            </div>

            <div class="card">
                <img src="photos/nazma.png" alt="Nazma Shaheen">
                <div class="card-body">
                    <h2>Nazma Shaheen</h2>
                    <h3>Executive Member</h3>
                    <p>Advancing social welfare and supporting community empowerment.</p>
                </div>
            </div>

            <div class="card">
                <img src="photos/Shahana.png" alt="Mst. Shahana Pervin">
                <div class="card-body">
                    <h2>Mst. Shahana Pervin</h2>
                    <h3>Executive Member</h3>
                    <p>Implementing impactful projects that uplift communities.</p>
                </div>
            </div>

            <div class="card">
                <img src="photos/alo.png" alt="Md. Nazrul Islam">
                <div class="card-body">
                    <h2>Md. Nazrul Islam</h2>
                    <h3>Executive Member</h3>
                    <p>Strengthe.ning social advocacy and expanding ATMABISWAS’s reach.</p>
                </div>
            </div>

            <div class="card">
                <img src="photos/ranabiswas.png" alt="Md. Iktiar Uddin">
                <div class="card-body">
                    <h2>Md. Iktiar Uddin</h2>
                    <h3>Treasurer</h3>
                    <p>Overseeing financial management with transparency and accountability.</p>
                </div>
            </div>
            <div class="card">
                <img src="photos/ranabiswas.png" alt="Md. Iktiar Uddin">
                <div class="card-body">
                    <h2>Md. Iktiar Uddin</h2>
                    <h3>Treasurer</h3>
                    <p>Overseeing financial management with transparency and accountability.</p>
                </div>
            </div>
            <div class="card">
                <img src="photos/ranabiswas.png" alt="Md. Iktiar Uddin">
                <div class="card-body">
                    <h2>Md. Iktiar Uddin</h2>
                    <h3>Treasurer</h3>
                    <p>Overseeing financial management with transparency and accountability.</p>
                </div>
            </div>

        </div>


    </div>
    <?php include 'footer.php' ?>
</body>

</html>