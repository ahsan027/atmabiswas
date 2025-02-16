<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMABISWAS NGO - Press Coverage</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
            font-family: 'Arial', sans-serif;
        }

        body {
            background-color: #f5f5f5;
        }

        .press-header {
            background-color:#176cc6;
            color: white;
            text-align: center;
            padding: 2rem;
        }

        .year-filter {
            display: flex;
            justify-content: center;
            gap: 1rem;
            padding: 1rem;
            background-color: #0a58ca;
        }

        .year-btn {
            padding: 0.5rem 1rem;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            background-color: #3498db;
            color: white;
            transition: all 0.3s;
        }

        .year-btn.active {
            background-color: #e74c3c;
        }

        .press-container {
            max-width: 1200px;
            margin: 2rem auto;
            padding: 0 1rem;
        }

        .year-section {
            display: none;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 2rem;
            animation: fadeIn 0.5s;
        }

        .year-section.active {
            display: grid;
        }

        .press-card {
            background: white;
            border-radius: 10px;
            padding: 1rem;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }

        .press-card img {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 5px;
        }

        .press-content {
            padding: 1rem 0;
        }

        .press-title {
            color: #2c3e50;
            margin-bottom: 0.5rem;
        }

        .press-date {
            color: #7f8c8d;
            font-size: 0.9rem;
        }

        .download-btn {
            display: inline-block;
            padding: 0.5rem 1rem;
            background-color: #27ae60;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            margin-top: 1rem;
        }

        .tv-news {
            background-color: #e74c3c;
        }

        @keyframes fadeIn {
            from {opacity: 0;}
            to {opacity: 1;}
        }

        @media (max-width: 768px) {
            .year-section {
                grid-template-columns: 1fr;
            }
        }
    </style>
</head>
<body>
    <header class="press-header">
        <h1>Media Coverage</h1>
        <p>Our activities in the press and media</p>
    </header>

    <div class="year-filter">
        <button class="year-btn active" data-year="2024">2024</button>
        <button class="year-btn" data-year="2023">2023</button>
        <button class="year-btn" data-year="2022">2022</button>
    </div>

    <div class="press-container">
        <!-- 2024 Section -->
        <div class="year-section active" id="2024">
            <div class="press-card">
                <img src="scholarship-news.jpg" alt="Scholarship News">
                <div class="press-content">
                    <h3 class="press-title">Scholarship Distribution Event</h3>
                    <p class="press-date">January 15, 2024</p>
                    <p>Covered by The Daily News about our scholarship program...</p>
                    <a href="scholarship.pdf" class="download-btn">
                        <i class="fas fa-file-pdf"></i> Download PDF
                    </a>
                </div>
            </div>

            <div class="press-card">
                <div class="press-content">
                    <h3 class="press-title">Women Rights Campaign</h3>
                    <p class="press-date">March 8, 2024</p>
                    <p>TV coverage by National News Channel...</p>
                    <a href="https://example.com/news-video" class="download-btn tv-news">
                        <i class="fas fa-tv"></i> Watch News
                    </a>
                </div>
            </div>
            <!-- Add more 2024 entries -->
        </div>

        <!-- 2023 Section -->
        <div class="year-section" id="2023">
            <!-- Similar structure for 2023 entries -->
        </div>

        <!-- 2022 Section -->
        <div class="year-section" id="2022">
            <!-- Similar structure for 2022 entries -->
        </div>
    </div>

    <script>
        // Year Filter Functionality
        const yearButtons = document.querySelectorAll('.year-btn');
        const yearSections = document.querySelectorAll('.year-section');

        yearButtons.forEach(button => {
            button.addEventListener('click', () => {
                // Remove active class from all buttons and sections
                yearButtons.forEach(btn => btn.classList.remove('active'));
                yearSections.forEach(section => section.classList.remove('active'));
                
                // Add active class to clicked button and corresponding section
                const year = button.dataset.year;
                button.classList.add('active');
                document.getElementById(year).classList.add('active');

                // Smooth scroll to top of section
                document.querySelector('.press-container').scrollIntoView({
                    behavior: 'smooth'
                });
            });
        });

        // Optional: Add PDF viewer functionality
        const pdfLinks = document.querySelectorAll('[href$=".pdf"]');
        pdfLinks.forEach(link => {
            link.addEventListener('click', (e) => {
                e.preventDefault();
                // Add PDF viewer modal implementation here
                window.open(link.href, '_blank');
            });
        });
    </script>
</body>
</html>