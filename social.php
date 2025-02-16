<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Social Development- ATMABISWAS </title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        body {
        background-color: #e6f2ff;
        overflow-x:hidden ; 
        }


        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .segment {
            margin-bottom: 40px;
        }

        .segment h2 {
            color: #0078d7;
            text-align: center;
            margin-bottom: 30px;
            font-size: 2.5rem;
        }

        .card-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .card {
            background: white;
            border-radius: 10px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            overflow: hidden;
            transition: transform 0.3s ease, box-shadow 0.3s ease;
        }

        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 8px 15px rgba(0, 0, 0, 0.2);
        }

        .card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
        }

        .card-content {
            text-align: center;
            padding: 15px;
        }

        .card-content h3 {

            margin: 0 0 10px;
            font-size: 1.2rem;
            color: #333;
        }

        .card-content p {
            margin: 0;
            color: #555;
            font-size: 0.9rem;
        }


    </style>
</head>
<body>
<?php include 'Navbar.php'?>

    <div class="container">
        <!-- Scholarship Segment -->
        <div class="segment">
            <h2>ATMABISWAS Daycare</h2>
            <div class="card-grid">
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship Event </h3>
                        <p>PKSF was a partner in providing the scholarship.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship Event</h3>
                        <p>Empowering students through education.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship </h3>
                        <p>Providing opportunities for bright minds.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship </h3>
                        <p>Providing opportunities for bright minds.</p>
                    </div>
                </div>                                
                <!-- <div class="card">
                    <img src="https://www.aisct.org/wp-content/uploads/2023/06/1418_0I9A0942_1920px.jpg" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Education Empowerment</h3>
                        <p>Making dreams come true through education.</p>
                    </div>
                </div> -->
            </div>
        </div>

 
        <!-- Women Rights Segment -->
        <div class="segment">
            <h2>ATMABISWAS Pathshala </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Celebrate Women's Day!</h3>
                        <p>Advocating for equal rights.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Equality Campaign</h3>
                        <p>We are campaigning in the village for gender equality between women and men.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Equality Campaign</h3>
                        <p>We are campaigning in the city to promote gender equality between women and men.</p>
                    </div>
                </div>
                <!-- <div class="card">
                    <img src="women/women_pic4.jpeg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Equal Rights</h3>
                        <p>We are campaigning in the village to promote gender equality between men and women.</p>
                    </div>
                </div>                                -->
                <!-- <div class="card">
                    <img src="https://images.theconversation.com/files/209024/original/file-20180306-146671-haxeo6.jpg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Rights Awareness</h3>
                        <p>Championing women's causes.</p>
                    </div>
                </div> -->

            <!-- <div class="card">
                    <img src="https://images.theconversation.com/files/209024/original/file-20180306-146671-haxeo6.jpg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Rights Awareness</h3>
                        <p>Championing women's causes.</p>
                    </div>
                </div> -->
            </div>
        </div>



 
        <!-- Employee Conference Segment -->
        <div class="segment">
            <h2>Empowering Women </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Conference Event">
                    <div class="card-content">
                        <h3>Best Employee Award</h3>
                        <p>We are proud to present the Best Employee Award, recognizing outstanding performance and dedication to excellence.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Conference Event">
                    <div class="card-content">
                        <h3>Bi-Monthly Meetings with Managers for Guidance and Improvement</h3>
                        <p>We hold bi-monthly meetings with one or two managers to provide guidance on how we can support their branches and discuss strategies for improving their areas.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Conference Event">
                    <div class="card-content">
                        <h3>Annual Conference with Managers at Head Office</h3>
                        <p>Our team conducts an annual conference at the head office, where we meet with each manager to gather feedback on the past year’s progress.</p>
                    </div>
                </div>
            </div>
        </div>

       <!-- Winterfest Segment -->
       <div class="segment">
            <h2>Compassionate Care & Support </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Supporting Disabilitie</h3>
                        <p>Enjoying the spirit of winter together.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winter-fest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Seasonal Celebration</h3>
                        <p>Making winter memories.</p>
                    </div>
                </div>
            </div>
        </div>


        </div> 
        <!-- Other Events -->
        <div class="segment">
            <h2>Other Program </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Supporting Disabilitie</h3>
                        <p>Enjoying the spirit of winter together.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winter-fest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="LOGO/NGO_logo_monogram.png" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Seasonal Celebration</h3>
                        <p>Making winter memories.</p>
                    </div>
                </div>
            </div>
        </div>
   
    </div>

<?php include 'footer.php'?>
</body>
</html>
