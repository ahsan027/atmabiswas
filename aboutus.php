<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>About Us - ATMABISWAS</title>
    <link href="https://fonts.googleapis.com/css2?family=Roboto:wght@400;700&display=swap" rel="stylesheet">
    <style>
        body {
            margin: 0;
            color: #333;
            background-color: #f4f4f4;
            overflow-x: hidden;
        }

        header {
            background: linear-gradient(rgba(0, 0, 0, 0.5), rgba(0, 0, 0, 0.5)), 
                url('https://static.vecteezy.com/system/resources/thumbnails/036/324/708/small_2x/ai-generated-picture-of-a-tiger-walking-in-the-forest-photo.jpg') no-repeat center center/cover;
            color: white;
            padding: 100px 20px;
            text-align: center;
            text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.7);
        }

        header h1 {
            margin: 0;
            font-size: 3rem;
            animation: fadeInDown 2s ease-in-out;
        }

        header p {
            font-size: 1.2rem;
            margin-top: 20px;
            opacity: 0;
            animation: fadeIn 2s 0.5s ease-in-out forwards;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }

        .section {
            margin-bottom: 40px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
            position: relative;
            overflow: hidden;
        }

        .section h2 {
            color: #276a7b;
            margin-bottom: 20px;
            position: relative;
            animation: slideInLeft 1.5s ease-in-out;
        }

        .section p, .section ul {
            line-height: 1.6;
            animation: fadeIn 1.5s ease-in-out;
        }

        .values-list, .get-involved-list {
            list-style-type: none;
            padding: 0;
        }

        .values-list li, .get-involved-list li {
            margin: 10px 0;
            padding: 15px;
            background-color: #f9f9f9;
            border-left: 5px solid #4CAF50;
            border-radius: 5px;
            animation: fadeInUp 1.5s ease-in-out;
        }

        .image-section {
            display: flex;
            flex-wrap: wrap;
            gap: 20px;
        }

        .image-section img {
            flex: 1 1 100%;
            max-width: 100%;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            transform: scale(0.95);
            transition: transform 0.3s ease;
        }

        .image-section img:hover {
            transform: scale(1);
        }

        .image-section p {
            flex: 1 1 100%;
            margin: 0;
        }

        @media (min-width: 768px) {
            .image-section img {
                flex: 1 1 45%;
            }

            .image-section p {
                flex: 1 1 45%;
            }
        }

        .video-section {
            margin-top: 40px;
            padding: 20px;
            background-color: white;
            border-radius: 10px;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }

        .video-section h2 {
            color: #374293;
            margin-bottom: 20px;
            text-align: center;
        }

        .video-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }

        .video-item {
            position: relative;
            background: black;
            border-radius: 10px;
            overflow: hidden;
            cursor: pointer;
        }

        .video-item img {
            width: 100%;
            display: block;
            opacity: 0.8;
            transition: opacity 0.3s ease;
        }

        .video-item img:hover {
            opacity: 1;
        }

        .video-item .play-button {
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            width: 60px;
            height: 60px;
            background: rgba(255, 255, 255, 0.8);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 2rem;
            color: #4c74af;
            transition: transform 0.3s ease;
        }

        .video-item:hover .play-button {
            transform: translate(-50%, -50%) scale(1.2);
        }

        footer {
            text-align: center;
            padding: 20px;
            background-color: #4c98af;
            color: white;
            animation: fadeInUp 2s ease-in-out;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }
            to {
                opacity: 1;
            }
        }

        @keyframes fadeInDown {
            from {
                opacity: 0;
                transform: translateY(-20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }

        @keyframes slideInLeft {
            from {
                opacity: 0;
                transform: translateX(-20px);
            }
            to {
                opacity: 1;
                transform: translateX(0);
            }
        }

        @keyframes fadeInUp {
            from {
                opacity: 0;
                transform: translateY(20px);
            }
            to {
                opacity: 1;
                transform: translateY(0);
            }
        }
    </style>
</head>
<body>
    <?php include 'Navbar.php'?>
    <header>
        <h1>Welcome to ATMABISWAS</h1>
        <p>Empowering individuals and fostering self-belief</p>
    </header>

    <div class="container">
        <div class="section">
            <h2>About Us</h2>
            <div class="image-section">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/036/324/708/small_2x/ai-generated-picture-of-a-tiger-walking-in-the-forest-photo.jpg" alt="Tiger in the forest">
                <p>ATMABISWAS is a non-governmental, non-profit, voluntary, and development-focused organization committed to creating meaningful social change and fostering sustainable development. Established in January 1991 under the Department of Social Welfare, ATMABISWAS has dedicated over three decades to empowering communities across Bangladesh. The organization primarily focuses on serving the disadvantaged populations, striving to uplift their living standards and enhance their access to essential resources and opportunities. <br> <br> Since its inception, ATMABISWAS has worked tirelessly to support marginalized individuals and communities, with an initial emphasis on the district of Chuadanga. Through a range of social welfare programs, development projects, and micro-credit initiatives, the organization has impacted thousands of lives, enabling beneficiaries to break the cycle of poverty and build a better future.</p>
            </div>
        </div>

        <div class="section">
            <h2>Our Vision</h2>
            <p>Our vision is to create a society where poverty, inequality, and injustice are eradicated, and ecological balance is maintained. We strive for a world where every individual has the opportunity to thrive and contribute to sustainable development.</p>
        </div>

        <div class="section">
            <h2>Our Mission</h2>
            <ul class="values-list">
                <li><strong>Empowerment:</strong> Providing resources and opportunities for personal and professional growth.</li>
                <li><strong>Support:</strong> Offering guidance and assistance to individuals in need.</li>
                <li><strong>Community:</strong> Creating a supportive network that fosters collaboration and mutual growth.</li>
                <li><strong>Progressive Social Transformation:</strong> Working towards a society that values harmony, peace, justice, and ecological balance.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Our Values</h2>
            <ul class="values-list">
                <li><strong>Integrity:</strong> We uphold the highest standards of integrity in all our actions.</li>
                <li><strong>Respect:</strong> We value each individual and treat everyone with respect and dignity.</li>
                <li><strong>Innovation:</strong> We embrace change and constantly seek new ways to achieve our mission.</li>
            </ul>
        </div>

        <div class="section">
            <h2>Our Team</h2>
            <div class="image-section">
                <img src="https://static.vecteezy.com/system/resources/thumbnails/036/324/708/small_2x/ai-generated-picture-of-a-tiger-walking-in-the-forest-photo.jpg" alt="Team spirit">
                <p>Our team consists of dedicated professionals who are passionate about making a difference. We collaborate to create a positive impact and support each other in our mission to empower communities and foster sustainable development. <br> Our team members come from diverse backgrounds, bringing a wealth of experience and expertise to the organization. We are united by our shared commitment to social justice, equality, and sustainable development. Each member of our team plays a crucial role in driving our mission forward, from field workers to administrative staff, project managers, and volunteers. Together, we strive to create a positive and lasting impact on the communities we serve.</p>
            </div>
        </div>

        <div class="section">
            <h2>Get Involved</h2>
            <ul class="get-involved-list">
                <li><strong>Volunteer:</strong> Share your skills and time to make a difference.</li>
                <li><strong>Donate:</strong> Support our initiatives with your generous contributions.</li>
                <li><strong>Partner:</strong> Collaborate with us to create impactful programs and events.</li>
                <li><strong>Career:</strong> Join our team and contribute to our mission professionally.</li>
            </ul>
        </div>

        <div class="video-section">
            <h2 style="text-align: center;">OUR WORK IN ACTION</h2>
            <div class="video-grid">
                <div class="video-item" onclick="window.open('https://youtu.be/HVoOyUpalp4?si=LXhEzFBPc4_WDxjC', '_blank')">
                    <img src="https://img.youtube.com/vi/HVoOyUpalp4/0.jpg" alt="Video Thumbnail">
                    <div class="play-button">▶</div>
                </div>
                <div class="video-item" onclick="window.open('https://youtu.be/HVoOyUpalp4?si=LXhEzFBPc4_WDxjC', '_blank')">
                    <img src="https://img.youtube.com/vi/HVoOyUpalp4/0.jpg" alt="Video Thumbnail">
                    <div class="play-button">▶</div>
                </div>
                <div class="video-item" onclick="window.open('https://youtu.be/HVoOyUpalp4?si=LXhEzFBPc4_WDxjC', '_blank')">
                    <img src="https://img.youtube.com/vi/HVoOyUpalp4/0.jpg" alt="Video Thumbnail">
                    <div class="play-button">▶</div>
                </div>
                <div class="video-item" onclick="window.open('https://youtu.be/HVoOyUpalp4?si=LXhEzFBPc4_WDxjC', '_blank')">
                    <img src="https://img.youtube.com/vi/HVoOyUpalp4/0.jpg" alt="Video Thumbnail">
                    <div class="play-button">▶</div>
                </div>
                                <div class="video-item" onclick="window.open('https://youtu.be/HVoOyUpalp4?si=LXhEzFBPc4_WDxjC', '_blank')">
                    <img src="https://img.youtube.com/vi/HVoOyUpalp4/0.jpg" alt="Video Thumbnail">
                    <div class="play-button">▶</div>
                </div>
            </div>
        </div>
    </div>

   <?php include 'footer.php'?>
</body>
</html>
