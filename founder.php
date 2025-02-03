
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;

        }
        body {
            overflow-x: hidden;
 background-color: #e6f2ff;

        }

        header {
            text-align: center;
            background: linear-gradient(90deg, #2c3e50, #34495e);
            color: white;
            padding: 60px 20px;
        }

        header h1 {
            font-size: 1.5rem;
            margin: 0;
        }

        header p {
            margin-top: 10px;
            font-size: 1rem;
            line-height: 1.6;
        }

        .founder-section {
            display: flex;
            flex-wrap: wrap;
            justify-content: center;
            align-items: center;
            padding: 40px 20px;
            background-color: #ecf0f1;
        }

        .founder-card {
            background: white;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            border-radius: 20px;
            overflow: hidden;
            width: 80%;
            max-width: 1200px;
            margin: 20px;
            display: flex;
            flex-wrap: wrap;
            align-items: center;
        }

        .founder-card img {
            flex: 1;
            min-width: 300px;
            max-width: 500px;
            object-fit: cover;
            height: 100%;
        }

        .founder-details {
            flex: 2;
            padding: 30px;
            text-align: left;
        }

        .founder-details h2 {
            margin: 0 0 10px;
            font-size: 2rem;
            color: #2c3e50;
        }

        .founder-details p {
            margin: 10px 0;
            font-size: 1.1rem;
            line-height: 1.8;
            color: #555;
        }

        
        @media (max-width: 768px) {
    .founder-card {
        flex-direction: column;
        text-align: center;
    }

    .founder-card img {
        width: 100%;
        max-width: none;
        height: auto;
    }

    .founder-details {
        padding: 20px;
    }

}

@media (max-width: 480px) {
    header h1 {
        font-size: 2rem;
    }

    header p {
        font-size: 1rem;
    }

    .founder-details h2 {
        font-size: 1.5rem;
    }

    .founder-details p {
        font-size: 1rem;
    }

}


        @media (max-width: 768px) {
            .founder-card {
                flex-direction: column;
                text-align: center;
            }

            .founder-card img {
                width: 100%;
                max-width: none;
                height: auto;
            }

            .founder-details {
                padding: 20px;
            }

            
        }

        @media (max-width: 480px) {
            header h1 {
                font-size: 2rem;
            }

            header p {
                font-size: 1rem;
            }

            .founder-details h2 {
                font-size: 1.5rem;
            }

            .founder-details p {
                font-size: 1rem;
            }

        }
    </style>
</head>
<body>
    <?php include 'Navbar.php' ?>
    <header>
        <h1>Founder of ATMABISWAS</h1>
        <p>Guiding ATMABISWAS Towards Harmony and Hope</p>
    </header>

    <div class="founder-section">
        <div class="founder-card">
            <img src="photos/ED_sir.jpg" alt="Akramul Haque Biswas">
            <div class="founder-details">
                <h2>Akramul Haque Biswas</h2>
                <p>Founder & President</p>
                <br>
                <p>Akramul Haque Biswas is the founder and Executive Director of ATMABISWAS. He has been actively working to address poverty, inequality and environmental sustainability, focusing on solutions that create long-term impact. His efforts center around sustainable development, gender justice and green energy, ensuring that communities have the resources and opportunities to grow while maintaining ecological balance. <br>
                
                Through ATMABISWAS, he has led various initiatives that promote renewable energy, economic empowerment, and social justice, aiming to build a society where everyone has equal access to opportunities. His work emphasizes collaboration and community-driven solutions, believing that progress comes from collective effort and sustainable practices. With a commitment to equity, environmental protection and progressive social transformation, he continues to advocate for a more just and sustainable future.</p>
            </div>
        </div>
    </div>
    <?php include 'footer.php'?>

    
</body>
</html>
