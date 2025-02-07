<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Development</title>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;600&display=swap" rel="stylesheet">
    <style>
    * {
        margin: 0;
        padding: 0;
        box-sizing: border-box;
    }

    body {

        background: #f5f7fa;
        color: #333;
        line-height: 1.6;
        overflow-x: hidden;
    }

    /* Header Styling */

    header {
        text-align: center;
        background: linear-gradient(90deg, #0a58ca, #176cc6);
        color: white;
        padding: 50px 20px;

    }

    header h1 {
        margin: 0;
        font-size: 2.8rem;
        font-weight: 700;
    }

    header p {
        margin: 10px 0;
        font-size: 1.2rem;
        opacity: 0.9;
    }


    /* Container */
    .container {
        width: 90%;
        max-width: 1200px;
        margin: 50px auto;
        padding: 20px;
    }

    /* Card Styling */
    .card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        padding: 40px;
        margin-bottom: 40px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
    }

    .card img {
        width: 100%;
        height: auto;
        border-radius: 12px;
        margin-bottom: 20px;
    }

    .card h2,
    .card h3 {
        margin-bottom: 15px;
        color: #0a58ca;
    }

    /* Services Section */
    .services {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: space-between;
    }

    .service-card {
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        flex: 1 1 calc(33.333% - 30px);
        padding: 30px;
        text-align: center;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .service-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
    }

    .service-card img {
        width: 100%;
        height: 150px;
        object-fit: cover;
        border-radius: 12px;
        margin-bottom: 20px;
    }

    .video-section {
        display: flex;
        flex-wrap: wrap;
        gap: 30px;
        justify-content: center;
        margin-top: 40px;
    }

    .video-card {
        flex: 1 1 45%;
        background: #fff;
        border-radius: 12px;
        box-shadow: 0 8px 20px rgba(0, 0, 0, 0.08);
        padding: 20px;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .video-card:hover {
        transform: translateY(-5px);
        box-shadow: 0 12px 25px rgba(0, 0, 0, 0.12);
    }

    .video-card iframe {
        width: 100%;
        height: 300px;
        border: none;
        border-radius: 12px;
    }

    /* Responsive Adjustments */
    @media (max-width: 768px) {
        .services {
            flex-direction: column;
        }

        .service-card {
            flex: 1 1 100%;
        }

        .video-card {
            flex: 1 1 100%;
        }

        header h1 {
            font-size: 2.2rem;
        }

        header p {
            font-size: 1rem;
        }
    }
    </style>
</head>

<body>
    <?php include 'Navbar.php'?>
    <header>
        <h1>Empowering Enterprises with Digital Innovation</h1>
        <p>
            ATMABISWAS drives sustainable growth by equipping small businesses with digital tools, strategic guidance,
            and financial support for long-term success.
        </p>
    </header>
    <div class="container">
        <div class="card">
            <p>
                ATMABISWAS, we are committed to fostering independence and entrepreneurship within our communities. We
                provide tailored microfinance solutions that enable small-scale entrepreneurs to launch and grow their
                businesses. Additionally, we empower women by offering sewing machines, equipping them with the tools to
                achieve financial independence. Our mission is to transform innovative ideas into sustainable ventures
                across various sectors, positively impacting local economies and enhancing livelihoods.
            </p>
        </div>
        <div class="card">
            <img src="fish&redy/fish&redy1.jpg" alt="Story of Success">
            <h2>Our Pride</h2>
            <h3>Success Story: Rana Hamid</h3>
            <p>
                Rana Hamid from Kanapara village turned his dream into reality with ATMABISWAS microfinance. With a
                loan, he started a biofloc fish farming business, overcoming financial challenges. Today, his venture
                thrives, supplying fresh fish to markets and creating jobs. His journey reflects how microfinance
                fosters entrepreneurship and community growth.
            </p>

        </div>
        <div class="card">
            <h2>Year of Experience with Pride</h2>
            <p>
                Our approach combines practical training with financial support, ensuring entrepreneurs have the
                resources they need to succeed. By fostering a culture of innovation and resilience, we help individuals
                not only achieve their business goals but also contribute meaningfully to the economic development of
                their communities.
            </p>
        </div>
        <div class="card">
            <h2>Our Services</h2>
            <div class="services">
                <div class="service-card">
                    <img src="https://www.investopedia.com/thmb/-yLsQoDgUtq0C50NOSWV6QqLx_8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/microfinance-v2-1306daf1c34c41119198bbc504886140.jpg"
                        alt="Micro Finance">
                    <h3>Short-Term Loan Provide (Weekly)</h3>
                    <p>
                        ATMABISWAS offers a short-term loan option on a weekly basis to assist employees with urgent
                        financial needs. This quick solution helps cover immediate expenses, with a repayment plan that
                        fits short-term requirements.
                    </p>
                </div>
                <div class="service-card">
                    <img src="https://www.investopedia.com/thmb/-yLsQoDgUtq0C50NOSWV6QqLx_8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/microfinance-v2-1306daf1c34c41119198bbc504886140.jpg"
                        alt="Training Camp">
                    <h3>Medium-Term Loan Provide (Monthly)</h3>
                    <p>
                        For longer-term financial support, ATMABISWAS provides a medium-term loan with monthly repayment
                        options. This program allows employees to manage larger expenses with a more flexible,
                        manageable repayment schedule.
                    </p>
                </div>
                <div class="service-card">
                    <img src="https://www.investopedia.com/thmb/-yLsQoDgUtq0C50NOSWV6QqLx_8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/microfinance-v2-1306daf1c34c41119198bbc504886140.jpg"
                        alt="Long-term Loans">
                    <h3>Long-Term Loan Provide (6-Month)</h3>
                    <p>
                        ATMABISWAS offers a long-term loan option for those with significant financial needs. With a
                        6-month repayment plan, employees can borrow a higher amount, paying it back in equal
                        installments over six months, ideal for major financial goals or emergencies.
                    </p>
                </div>
            </div>
        </div>
        <div class="card">
            <h2>Success Stories</h2>
            <div class="video-section">
                <div class="video-card">
                    <iframe src="https://www.youtube.com/embed/i0UxCHapj40" allowfullscreen></iframe>
                </div>
                <div class="video-card">
                <iframe src="https://www.youtube.com/embed/6xb-rN_9j24" allowfullscreen></iframe>

                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>

</html>