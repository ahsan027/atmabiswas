<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Career - ATMABISWAS</title>
    <link rel="stylesheet" href="career.css">
    <link rel="icon" type="image/png" href="LOGO/NGO_logo_monogram.png">
</head>

<body>
    <header>
        <div class="navbar">
            <div class="logo">
                <img src="https://atmabiswas.org/wp-content/uploads/2024/10/cropped-Monogram-web.webp" alt="Logo">
            </div>
            <ul class="menu">
                <li><a href="/frontend/index.php">Home</a></li>
                <li><a href="#">Available Jobs</a></li>
                <li><a href="../backend/login/login.php">Login</a></li>
            </ul>
        </div>
    </header>

    <main>
        <main>
            <section class="hero">
                <div class="slider">
                    <img src="https://img.freepik.com/free-photo/beautiful-view-sunset-sea_23-2148019892.jpg?size=626&ext=jpg"
                        alt="Slide 1">
                    <img src="https://t3.ftcdn.net/jpg/05/71/06/76/360_F_571067620_JS5T5TkDtu3gf8Wqm78KoJRF1vobPvo6.jpg"
                        alt="Slide 2" style="display: none;">
                    <img src="https://t3.ftcdn.net/jpg/08/07/28/18/360_F_807281855_tf1GkaRzrFBnfFILz0q2GfU9cV5UiC8A.jpg"
                        alt="Slide 3" style="display: none;">
                    <img src="https://png.pngtree.com/thumb_back/fh260/background/20230516/pngtree-wolfs-full-hd-wallpaper-art-wallpaper-1920x1080-1080p-image_2571308.jpg"
                        alt="Slide 4" style="display: none;">
                </div>
                <div class="overlay">
                    <div class="leftside">
                        <h1 class="num">14</h1>
                        <h1>Available Jobs</h1>
                    </div>
                    <div class="rightSide">
                        <h2>ATMABISWAS Career</h2>
                        <h2><span>Inspiring Excellence</span></h2>
                        <form class="search">
                            <input type="text" placeholder="Job Title, Keyword(S)">
                            <select>
                                <option value="">Sector</option>
                            </select>
                            <button>Search</button>
                        </form>
                    </div>


                </div>
                <div class="slider-indicators">
                    <button class="active"></button>
                    <button></button>
                    <button></button>
                    <button></button>
                </div>
            </section>
        </main>

        <section class="Sector">
            <h2>Sector wise Jobs</h2>
            <div class="Sector-list">
                <button onclick="alert('Senior Officer, Telecommunication jobs')">Senior Officer, Telecommunication
                    <span>1</span></button>
                <button onclick="alert('Assistant Officer, Technical, Telecommunication jobs')">Assistant Officer,
                    Technical, Telecommunication <span>1</span></button>
                <button onclick="alert('Field Office jobs')">Field Office <span>1</span></button>
                <button onclick="alert('Manager, Procurementjobs')">Manager, Procurement, Head
                    Office<span>1</span></button>
                <button onclick="alert('Human Resources jobs')">Human Resources <span>1</span></button>
                <button onclick="alert('Area Sales Manager jobs')">Area Sales Manager <span>1</span></button>
            </div>
        </section>

        <section class="available-jobs">
            <h2>Available Jobs</h2>
            <div class="job-list">
                <div class="job-card">
                    <h3>Research Assistant</h3>
                    <p>Department: Mathematics</p>
                    <p>Salary: Negotiable</p>
                    <p>Experience: Fresher</p>
                    <span>1 Day Remaining</span>
                </div>
                <div class="job-card">
                    <h3>Teaching Assistant</h3>
                    <p>Department: Mathematics</p>
                    <p>Salary: Negotiable</p>
                    <p>Experience: Fresher</p>
                    <span>1 Day Remaining</span>
                </div>
                <div class="job-card">
                    <h3>Multiple Open Ranked</h3>
                    <p>Department: BSRM School of Engineering</p>
                    <p>Salary: Negotiable</p>
                    <p>Experience: Fresher</p>
                    <span>16 Days Remaining</span>
                </div>
                <div class="job-card">
                    <h3>Project Manager</h3>
                    <p>Department: Human Resources</p>
                    <p>Salary: Negotiable</p>
                    <p>Experience: 3+ Years</p>
                    <span>10 Days Remaining</span>
                </div>
                <div class="job-card">
                    <h3>Software Engineer</h3>
                    <p>Department: IT</p>
                    <p>Salary: Negotiable</p>
                    <p>Experience: 2+ Years</p>
                    <span>5 Days Remaining</span>
                </div>
                <div class="job-card">
                    <h3>Marketing Specialist</h3>
                    <p>Department: Marketing</p>
                    <p>Salary: Negotiable</p>
                    <p>Experience: 1+ Year</p>
                    <span>7 Days Remaining</span>
                </div>
            </div>
        </section>
    </main>

    <script>
    let currentSlide = 0;
    const slides = document.querySelectorAll('.slider img');
    const indicators = document.querySelectorAll('.slider-indicators button');

    function showSlide(index) {
        slides.forEach((slide, i) => {
            slide.style.display = i === index ? 'block' : 'none';
        });

        indicators.forEach((indicator, i) => {
            indicator.classList.toggle('active', i === index);
        });
    }

    indicators.forEach((indicator, index) => {
        indicator.addEventListener('click', () => {
            currentSlide = index;
            showSlide(currentSlide);
        });
    });

    setInterval(() => {
        currentSlide = (currentSlide + 1) % slides.length;
        showSlide(currentSlide);
    }, 5000);
    </script>
</body>

</html>