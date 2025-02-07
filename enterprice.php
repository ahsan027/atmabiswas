<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Enterprise Development</title>
    <style>
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box
}
body {

            background: #f9f9f9;
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
            max-width: 1200px;
            margin: 20px auto;
            padding: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
        }

        .card img {
            width: 100%;
            height: auto;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .services {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
            justify-content: center;
        }

        .service-card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            width: calc(33.333% - 20px);
            padding: 20px;
            text-align: center;
        }

        .service-card img {
            width: 100%;
            height: 150px;
            object-fit: cover;
            border-radius: 10px;
            margin-bottom: 10px;
        }

        .video-section {
            display: flex;
            gap: 20px;
            justify-content: center;
            margin-top: 20px;
        }

        .video-card {
            flex: 1;
            max-width: 48%;
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            padding: 10px;
        }

        .video-card iframe {
            width: 100%;
            height: 250px;
            border: none;
            border-radius: 10px;
        }
    </style>
</head>
<body>
    <?php include 'Navbar.php'?>
<header>
        <h1>Empowering Enterprises with Digital Innovation</h1>
        <p>ATMABISWAS drives sustainable growth by equipping small businesses with digital tools, strategic guidance, and financial support for long-term success.</p>
    </header>

    <div class="container">
        <div class="card">
            <p>ATMABISWAS, we are committed to fostering independence and entrepreneurship within our communities. We provide tailored microfinance solutions that enable small-scale entrepreneurs to launch and grow their businesses. Additionally, we empower women by offering sewing machines, equipping them with the tools to achieve financial independence. Our mission is to transform innovative ideas into sustainable ventures across various sectors, positively impacting local economies and enhancing livelihoods.</p>
        </div>

        <div class="card">
            <img src="https://cdn.apartmenttherapy.info/image/upload/v1561242428/stock/shutterstock_373602469.jpg" alt="Story of Success">
            <h2>Our Pride</h2>
            <h3>Story of Success</h3>
            <p>Mr. Shajed Mia, a successful mobile shop owner, changed his fortune in 2013 by taking a micro-loan from ATMABISWAS. Now he runs 5 shops across 3 districts.</p>
            <p>A rickshaw puller, Mr. Faruk Ali, is today a successful grocery shop owner. He started making his fortune back in 2019.</p>
        </div>

        <div class="card">
            <h2>Year of Experience with Pride</h2>
            <p>Our approach combines practical training with financial support, ensuring entrepreneurs have the resources they need to succeed. By fostering a culture of innovation and resilience, we help individuals not only achieve their business goals but also contribute meaningfully to the economic development of their communities.</p>
        </div>

        <div class="card">
            <h2>Our Services</h2>
            <div class="services">
                <div class="service-card">
                    <img src="https://www.investopedia.com/thmb/-yLsQoDgUtq0C50NOSWV6QqLx_8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/microfinance-v2-1306daf1c34c41119198bbc504886140.jpg" alt="Micro Finance">
                    <h3>Micro Finance</h3>
                    <p>Dear valued member, ATMABISWAS is here to support your journey with accessible micro-financing options. Together, let's take the first step towards a brighter future. Contact us to learn more!</p>
                </div>

                <div class="service-card">
                    <img src="https://www.investopedia.com/thmb/-yLsQoDgUtq0C50NOSWV6QqLx_8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/microfinance-v2-1306daf1c34c41119198bbc504886140.jpg" alt="Training Camp">
                    <h3>Training Camp</h3>
                    <p>Empower yourself with knowledge! Join our training camps at ATMABISWAS to enhance your skills and unlock new opportunities. Let's grow and learn together!</p>
                </div>

                <div class="service-card">
                    <img src="https://www.investopedia.com/thmb/-yLsQoDgUtq0C50NOSWV6QqLx_8=/1500x0/filters:no_upscale():max_bytes(150000):strip_icc()/microfinance-v2-1306daf1c34c41119198bbc504886140.jpg" alt="Long-term Loans">
                    <h3>Long-term Loans</h3>
                    <p>Need a long-term loan to grow your business or achieve personal goals? ATMABISWAS offers flexible loan options with easy repayment plans. We're here to help you succeed!</p>
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
                    <iframe src="https://www.youtube.com/embed/i0UxCHapj40" allowfullscreen></iframe>
                </div>
            </div>
        </div>
    </div>
    <?php include 'footer.php'?>
</body>
</html>
