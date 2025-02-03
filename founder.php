
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
<<<<<<< HEAD
            font-family: 'Poppins', sans-serif;
=======

>>>>>>> 361072c06cfd2013274435de1dd8f5b65187e4a1
        }

        body {
            background-color: #e3f2fd;
            color: #333;
        }

        header {
            text-align: center;
            background: linear-gradient(90deg, #0d47a1, #1976d2);
            color: white;
            padding: 80px 20px;
            box-shadow: 0px 4px 8px rgba(0, 0, 0, 0.2);
        }

        header h1 {
            font-size: 3rem;
            margin-bottom: 10px;
        }

        header p {
            font-size: 1.3rem;
            line-height: 1.6;
            opacity: 0.9;
        }

        .founder-section {
            display: flex;
            justify-content: center;
            align-items: center;
            padding: 80px 20px;
        }

        .founder-card {
            background: white;
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.3);
            border-radius: 25px;
            overflow: hidden;
            max-width: 1200px;
            display: flex;
            align-items: center;
            transition: transform 0.3s ease-in-out;
        }

        .founder-card:hover {
            transform: scale(1.03);
        }

        .founder-card img {
            width: 100%;
            max-width: 450px;
            height: auto;
            object-fit: cover;
            border-radius: 25px 0 0 25px;
        }

        .founder-details {
            flex: 2;
            padding: 50px;
            background: paperwhite;
            border-radius: 0 25px 25px 0;
        }

        .founder-details h2 {
            font-size: 2.2rem;
            color: #0d47a1;
            margin-bottom: 15px;
        }

        .founder-details p {
            margin: 15px 0;
            font-size: 1.2rem;
            line-height: 1.8;
            color: #333;
        }

        @media (max-width: 768px) {
            .founder-card {
                flex-direction: column;
                text-align: center;
            }
            .founder-card img {
                max-width: 100%;
                border-radius: 25px 25px 0 0;
            }
            .founder-details {
                border-radius: 0 0 25px 25px;
                padding: 30px;
            }
        }
    </style>
</head>
<body>
    <?php include 'Navbar.php'; ?>
    <header>
        <h1>Founder of ATMABISWAS</h1>
        <p>Guiding ATMABISWAS Towards Harmony and Hope</p>
    </header>

    <div class="founder-section">
        <div class="founder-card">
            <img src="photos/ED_sir.jpg" alt="Akramul Haque Biswas">
            <div class="founder-details">
                <h2>Akramul Haque Biswas</h2>
                <p><strong>Founder & President</strong></p>
                <p>Akramul Haque Biswas is the founder and Executive Director of ATMABISWAS. He has been actively working to address poverty, inequality, and environmental sustainability, focusing on solutions that create long-term impact.</p>
                <p>Through ATMABISWAS, he has led various initiatives promoting renewable energy, economic empowerment, and social justice. His vision is to build a society where everyone has equal access to opportunities while maintaining ecological balance. </p>

            </div>
        </div>
    </div>
    <?php include 'footer.php'; ?>
</body>
</html>
