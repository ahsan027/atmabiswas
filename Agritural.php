<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>Supporting Food and Agricultural Development</title>
  <style>
    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
      font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
    }
    body {
      background: #f5f5f5;
      color: #333;
      overflow-x: hidden;
    }
    header {
      text-align: center;
      background: linear-gradient(90deg, #0a58ca, #176cc6);
      color: #fff;
      padding: 80px 20px;
      position: relative;
    }
    header h1 {
      font-size: 2.5rem;
      letter-spacing: 2px;
      margin-bottom: 20px;
    }
    header p {
      font-size: 1.3rem;
      opacity: 0.9;
    }
    .container {
      max-width: 1200px;
      margin: 40px auto;
      padding: 20px;
    }
    .card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      margin-bottom: 40px;
      transition: transform 0.3s ease;
    }
    .card:hover {
      transform: translateY(-8px);
    }
    .card img {
      width: 100%;
      height: auto;
      display: block;
    }
    .card .content {
      padding: 20px;
    }
    .card .content h3 {
      font-size: 1.8rem;
      margin-bottom: 10px;
      color: #0a58ca;
    }
    .card .content p {
      font-size: 1rem;
      line-height: 1.6;
    }
    .info-section {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0,0,0,0.1);
      padding: 30px;
      margin-bottom: 40px;
      text-align: center;
    }
    .info-section h2 {
      font-size: 2rem;
      margin-bottom: 15px;
      color: #0a58ca;
      text-align: center;
    }
    .info-section p {
      font-size: 1.1rem;
      line-height: 1.8;
      text-align: center;
    }
    .video-section {
      display: flex;
      flex-wrap: wrap;
      gap: 20px;
      margin-bottom: 40px;
    }
    .video-card {
      background: #fff;
      border-radius: 12px;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      overflow: hidden;
      flex: 1 1 48%;
      transition: transform 0.3s ease;
    }
    .video-card:hover {
      transform: scale(1.03);
    }
    .video-card iframe {
      width: 100%;
      height: 280px;
      display: block;
    }
    .video-card .content {
      padding: 15px;
    }
    .video-card .content h4 {
      font-size: 1.4rem;
      margin-bottom: 10px;
      color: #176cc6;
    }
    .video-card .content p {
      font-size: 1rem;
      line-height: 1.6;
    }
    .gallery {
      display: grid;
      grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
      gap: 20px;
      margin-bottom: 40px;
      text-align: center;
    }
    .gallery img {
      width: 100%;
      height: 200px;
      object-fit: cover;
      border-radius: 12px;
      transition: transform 0.3s ease;
      box-shadow: 0 6px 15px rgba(0, 0, 0, 0.1);
      text-align: center;
    }
    .gallery img:hover {
        text-align: center;
      transform: scale(1.1);
    }
    .cta {
      text-align: center;
      margin: 40px 0;
    }
    .cta a {
      background: #0a58ca;
      color: #fff;
      padding: 15px 40px;
      font-size: 1.2rem;
      border-radius: 30px;
      text-decoration: none;
      transition: background 0.3s ease;
    }
    .cta a:hover {
      background: #004c9b;
    }
    @media (max-width: 768px) {
      header h1 {
        font-size: 2rem;
      }
      header p {
        font-size: 1rem;
      }
      .video-card iframe {
        height: 220px;
      }
      .info-section h2 {
        font-size: 1.8rem;
        text-align: center;
      }
      .cta a {
        font-size: 1rem;
        padding: 12px 30px;
      }
    }
  </style>
</head>
<body>
  <?php include 'Navbar.php'?>
  <header>
    <h1>ATMABISWAS NGO – Advancing Food and Agriculture</h1>
    <p>Promoting Sustainable Agriculture and Food Security for a Better Future</p>
  </header>
  <div class="container">
    <div class="card">
      <img src="Food/food_pic1.jpeg" alt="Agriculture" />
      <div class="content">
        <h3>Sustainable Growth: Empowering Communities Through Food and Agriculture</h3>
        <p >
          We provide farmers with training on sustainable farming practices, crop diversification, and improved techniques to increase yields and income. Our mission is to empower communities with the resources they need for a sustainable future.
        </p>
      </div>
    </div>

    <div class="info-section">
      <h2>Our Impact</h2>
      <p>
        ATMABISWAS has been transforming lives through innovative agricultural practices, educational programs, and community-driven initiatives. Together, we are revolutionizing the agricultural landscape.
      </p>
    </div>

    <div class="video-section">
      <div class="video-card">
        <iframe src="https://www.youtube.com/embed/HVoOyUpalp4" title="Md. Sabit Hossain’s Journey"></iframe>
        <div class="content">
          <h4>A Story of Transformation</h4>
          <p>
            Md. Sabit Hossain transformed his life with long-term loans and training from ATMABISWAS, becoming a successful fisherman who now inspires his community.
          </p>
        </div>
      </div>
      <div class="video-card">
        <iframe src="https://www.youtube.com/embed/RVv2-Qju1zo" title="Inspiring Journeys"></iframe>
        <div class="content">
          <h4>Inspiring Entrepreneurial Journeys</h4>
          <p>
            Discover how innovative approaches and community support in agriculture have enabled many to overcome challenges and thrive in their endeavors.
          </p>
        </div>
      </div>
    </div>

    <h3>Gallery</h3>

    <div class="gallery">
      <img src="Cow/cow_pic1.jpg" alt="Picture 1" />
      <img src="ag/ag_pic1.jpeg" alt="Picture 2" />
      <img src="ag/ag_pic2.jpeg" alt="Picture 3" />
      <img src="FISH/fish_pic3.jpeg" alt="Picture 4" />
      <img src="FISH/fish_pic6.jpg" alt="Picture 5" />
      <img src="FISH/fish_pic5.gif" alt="Picture 6" />
      <img src="ag/ag_pic3.jpeg" alt="Picture 7" />
      <img src="FISH/fish_pic4.jpg" alt="Picture 8" />
    </div>


  </div>
  <?php include 'footer.php'?>
</body>
</html>
