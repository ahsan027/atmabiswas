<?php 


?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Event Page</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        *{
            margin: 0;
            padding: 0;
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
            margin-bottom: 20px;
            font-size: 2rem;
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
            <h2>Scholarship Events</h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://www.aisct.org/wp-content/uploads/2023/06/1418_0I9A0942_1920px.jpg" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship Program</h3>
                        <p>Empowering students through education.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.aisct.org/wp-content/uploads/2023/06/1418_0I9A0942_1920px.jpg" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship Event</h3>
                        <p>Providing opportunities for bright minds.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.aisct.org/wp-content/uploads/2023/06/1418_0I9A0942_1920px.jpg" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship Event</h3>
                        <p>Providing opportunities for bright minds.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.aisct.org/wp-content/uploads/2023/06/1418_0I9A0942_1920px.jpg" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Scholarship Event</h3>
                        <p>Providing opportunities for bright minds.</p>
                    </div>
                </div>                                
                <div class="card">
                    <img src="https://www.aisct.org/wp-content/uploads/2023/06/1418_0I9A0942_1920px.jpg" alt="Scholarship Event">
                    <div class="card-content">
                        <h3>Education Empowerment</h3>
                        <p>Making dreams come true through education.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Winterfest Segment -->
        <div class="segment">
            <h2>Winter Fest Events </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winterfest Celebration</h3>
                        <p>Enjoying the spirit of winter together.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Seasonal Celebration</h3>
                        <p>Making winter memories.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Women Rights Segment -->
        <div class="segment">
            <h2>Women Rights Events </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://images.theconversation.com/files/209024/original/file-20180306-146671-haxeo6.jpg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Women Empowerment</h3>
                        <p>Advocating for equal rights.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.theconversation.com/files/209024/original/file-20180306-146671-haxeo6.jpg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Equality Campaign</h3>
                        <p>Breaking barriers for women.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.theconversation.com/files/209024/original/file-20180306-146671-haxeo6.jpg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Equality Campaign</h3>
                        <p>Breaking barriers for women.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://images.theconversation.com/files/209024/original/file-20180306-146671-haxeo6.jpg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Equality Campaign</h3>
                        <p>Breaking barriers for women.</p>
                    </div>
                </div>                               
                <div class="card">
                    <img src="https://images.theconversation.com/files/209024/original/file-20180306-146671-haxeo6.jpg" alt="Women Rights Event">
                    <div class="card-content">
                        <h3>Rights Awareness</h3>
                        <p>Championing women's causes.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Awareness Events Segment -->
        <div class="segment">
            <h2>Awareness Events</h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://www.aim.com.au/sites/default/files/field/image/AIM-Blog-Achieving-Self-Awareness-How-to-Know-What-You-Don%E2%80%99t-Know.png" alt="Awareness Event">
                    <div class="card-content">
                        <h3>Community Awareness</h3>
                        <p>Spreading important messages.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.aim.com.au/sites/default/files/field/image/AIM-Blog-Achieving-Self-Awareness-How-to-Know-What-You-Don%E2%80%99t-Know.png" alt="Awareness Event">
                    <div class="card-content">
                        <h3>Health Awareness</h3>
                        <p>Promoting better health practices.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.aim.com.au/sites/default/files/field/image/AIM-Blog-Achieving-Self-Awareness-How-to-Know-What-You-Don%E2%80%99t-Know.png" alt="Awareness Event">
                    <div class="card-content">
                        <h3>Health Awareness</h3>
                        <p>Promoting better health practices.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.aim.com.au/sites/default/files/field/image/AIM-Blog-Achieving-Self-Awareness-How-to-Know-What-You-Don%E2%80%99t-Know.png" alt="Awareness Event">
                    <div class="card-content">
                        <h3>Health Awareness</h3>
                        <p>Promoting better health practices.</p>
                    </div>
                </div>                              
                <div class="card">
                    <img src="https://www.aim.com.au/sites/default/files/field/image/AIM-Blog-Achieving-Self-Awareness-How-to-Know-What-You-Don%E2%80%99t-Know.png" alt="Awareness Event">
                    <div class="card-content">
                        <h3>Social Responsibility</h3>
                        <p>Encouraging active participation.</p>
                    </div>
                </div>
            </div>
        </div>

 
        <!-- Employee Conference Segment -->
        <div class="segment">
            <h2>Employee Conference </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://s3-prod.staffingindustry.com/public/styles/media_component_16_9_sm/public/2024-02/Conferences%20Image.png?h=d1cb525d" alt="Conference Event">
                    <div class="card-content">
                        <h3>Annual Meet</h3>
                        <p>Connecting minds and sharing ideas.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://s3-prod.staffingindustry.com/public/styles/media_component_16_9_sm/public/2024-02/Conferences%20Image.png?h=d1cb525d" alt="Conference Event">
                    <div class="card-content">
                        <h3>Staff Workshop</h3>
                        <p>Enhancing professional skills.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://s3-prod.staffingindustry.com/public/styles/media_component_16_9_sm/public/2024-02/Conferences%20Image.png?h=d1cb525d" alt="Conference Event">
                    <div class="card-content">
                        <h3>Team Building</h3>
                        <p>Strengthening team bonds.</p>
                    </div>
                </div>
            </div>
        </div>

        <!-- Winterfest Segment -->
        <div class="segment">
            <h2>Others Events </h2>
            <div class="card-grid">
                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winterfest Celebration</h3>
                        <p>Enjoying the spirit of winter together.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>
                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
                    <div class="card-content">
                        <h3>Winter Joy</h3>
                        <p>Festive fun and togetherness.</p>
                    </div>
                </div>

                <div class="card">
                    <img src="https://www.bracu.ac.bd/sites/default/files/uploads/2024/11/05/Residential-Campus-Fagun-Utsab.jpg" alt="Winterfest Event">
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
