
    <style>

        .container {
            text-align: center;
            padding: 20px;
        }

        h1 {
            margin: 20px 0;
            font-size: 2rem;
            color: #2c3e50;
        }

        .carousel-container {
            position: relative;
            width: 100%;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden;
        }

        .carousel {
            display: flex;
            align-items: center;
            justify-content: center;
            transition: transform 0.5s ease;
        }

        .carousel img {
            width: 80px;
            height: 80px;
            border-radius: 50%;
            border: 2px solid #2c3e50;
            cursor: pointer;
            transition: transform 0.3s, border-color 0.3s;
            flex-shrink: 0;
            margin: 0 15px;
        }

        .carousel img.selected {
            border-color: #f39c12;
            padding: 0.5rem;
            transform: scale(1.2);
        }

        .content {
            background-color: #2c3e50;
            color: white;
            display: flex;
            width: 100vw;
            height: 300px;
            margin: 20px 0;
        }

        .content .logo-section {
            flex: 1;
            display: flex;
            align-items: center;
            justify-content: center;
            background-color: #1a252f;
            border-right: 2px solid white;
        }

        .content .logo-section img {
            width: 150px;
            height: 150px;
            border-radius: 50%;
            border: 2px solid #f39c12;
        }

        .content .info-section {
            flex: 2;
            display: flex;
            flex-direction: column;
            justify-content: center;
            padding: 20px;
        }

        .content h2 {
            margin: 0 0 10px;
        }

        .content p {
            font-size: 1rem;
            line-height: 1.5;
        }

        .explore-button {
            margin-top: 20px;
            padding: 10px 20px;
            border: 2px solid white;
            color: white;
            background-color: transparent;
            cursor: pointer;
            border-radius: 5px;
            font-size: 1rem;
            transition: background-color 0.3s, color 0.3s;
            align-self: start;
        }

        .explore-button:hover {
            background-color: white;
            color: #2c3e50;
        }

        .navigation {
            position: absolute;
            top: 50%;
            transform: translateY(-50%);
            font-size: 2rem;
            color: #2c3e50;
            cursor: pointer;
            user-select: none;
            z-index: 10;
        }

        .prev {
            left: 10px;
        }

        .next {
            right: 10px;
        }

        .navigation.disabled {
            opacity: 0.3;
            pointer-events: none;
        }

        @media (max-width: 768px) {
            .container{
                background-color: #f39c12;
            }
            .content {
                flex-direction: column;
                height: auto;
                background-color: red;
            }

            .content .logo-section {
                border-right: none;
                border-bottom: 2px solid white;
                padding: 20px 0;
            }

            .content .info-section {
                padding: 10px;
            }

            .carousel img {
                width: 60px;
                height: 60px;
            }

            .explore-button {
                padding: 8px 16px;
                font-size: 0.9rem;
            }

            h1 {
                font-size: 1.5rem;
            }
        }

        @media (max-width: 480px) {
            .content p {
                font-size: 0.8rem;
            }
        }
    </style>

    <div class="container">
        <h1>Extracurricular Activities</h1>

        <div class="carousel-container">
            <div class="navigation prev">&#8249;</div>
            <div class="carousel">
            <img src="https://cdn.pixabay.com/photo/2025/01/28/14/54/nature-5676789_960_720.jpg" alt="Nature 1">
            <img src="https://images.pexels.com/photos/5676789/pexels-photo-5676789.jpeg" alt="Nature 2">
            <img src="https://images.unsplash.com/photo-1516585302037-6147b7a06f8f" alt="Nature 3">
            <img src="https://burst.shopifycdn.com/photos/5676789" alt="Nature 4">
            <img src="https://cdn.pixabay.com/photo/2025/01/28/14/54/nature-5676789_960_720.jpg" alt="Nature 5">
            <img src="https://images.pexels.com/photos/5676789/pexels-photo-5676789.jpeg" alt="Nature 6">
            <img src="https://images.unsplash.com/photo-1516585302037-6147b7a06f8f" alt="Nature 7">
            <img src="https://burst.shopifycdn.com/photos/5676789" alt="Nature 8">
            <img src="https://cdn.pixabay.com/photo/2025/01/28/14/54/nature-5676789_960_720.jpg" alt="Nature 9">
            <img src="https://images.pexels.com/photos/5676789/pexels-photo-5676789.jpeg" alt="Nature 10">
            <img src="https://images.unsplash.com/photo-1516585302037-6147b7a06f8f" alt="Nature 11">
            <img src="https://burst.shopifycdn.com/photos/5676789" alt="Nature 12">
            </div>
            <div class="navigation next">&#8250;</div>
        </div>

        <div class="content">
            <div class="logo-section">
                <img src="https://via.placeholder.com/150" alt="Selected Club Logo" id="club-logo">
            </div>
            <div class="info-section">
                <h2 id="club-title">ULAB Computer Society</h2>
                <p id="club-description">ULAB Computer Society is a club of IT-savvy students. It hopes to be a club
                    where students interested in technologies can share their knowledge and be benefited from each other
                    by collaboration. ULAB ComSoc is also keen to provide a platform for developing leadership skills.
                </p>
                <button class="explore-button">Explore</button>
            </div>
        </div>
    </div>

    <script>
        window.onload =function(){
                    const carousel = document.querySelector('.carousel');
        const prev = document.querySelector('.prev');
        const next = document.querySelector('.next');
        const images = Array.from(document.querySelectorAll('.carousel img'));
        const title = document.getElementById('club-title');
        const description = document.getElementById('club-description');
        const logo = document.getElementById('club-logo');

        const activities = [
            {
                title: "ULAB Computer Society",
                description: "ULAB Computer Society is a club of IT-savvy students. It hopes to be a club where students interested in technologies can share their knowledge and be benefited from each other by collaboration. ULAB ComSoc is also keen to provide a platform for developing leadership skills.",
                logo: "https://via.placeholder.com/150"
            },
            {
                title: "ULAB Debating Club",
                description: "ULAB Debating Club helps students develop their oratory and reasoning skills through debate competitions and practice sessions.",
                logo: "https://via.placeholder.com/150"
            },
                        {
                title: "ULAB Debating Club",
                description: "ULAB Debating Club helps students develop their oratory and reasoning skills through debate competitions and practice sessions.",
                logo: "https://via.placeholder.com/150"
            },
                        {
                title: "ULAB Debating Club",
                description: "ULAB Debating Club helps students develop their oratory and reasoning skills through debate competitions and practice sessions.",
                logo: "https://via.placeholder.com/150"
            },
                        {
                title: "ULAB Debating Club",
                description: "ULAB Debating Club helps students develop their oratory and reasoning skills through debate competitions and practice sessions.",
                logo: "https://via.placeholder.com/150"
            },
                        {
                title: "ULAB Debating Club",
                description: "ULAB Debating Club helps students develop their oratory and reasoning skills through debate competitions and practice sessions.",
                logo: "https://via.placeholder.com/150"
            },
                        {
                title: "ULAB Debating Club",
                description: "ULAB Debating Club helps students develop their oratory and reasoning skills through debate competitions and practice sessions.",
                logo: "https://via.placeholder.com/150"
            },
            {
                title: "ULAB Robotics Club",
                description: "ULAB Robotics Club focuses on innovation and hands-on learning in the field of robotics and automation.",
                logo: "https://via.placeholder.com/150"
            },
            {
                title: "ULAB Sports Club",
                description: "ULAB Sports Club promotes physical fitness and teamwork through various sports activities and tournaments.",
                logo: "https://via.placeholder.com/150"
            }
        ];

        let currentIndex = 0;

        function updateCarousel() {
            const offset = -currentIndex * 110;
            carousel.style.transform = `translateX(calc(50% + ${offset}px))`;

            images.forEach((img, index) => {
                img.classList.toggle('selected', index === currentIndex);
            });

            prev.classList.toggle('disabled', currentIndex === 0);
            next.classList.toggle('disabled', currentIndex === images.length - 1);
        }

        function updateContent(index) {
            const activity = activities[index];
            title.textContent = activity.title;
            description.textContent = activity.description;
            logo.src = activity.logo;
        }

        prev.addEventListener('click', () => {
            if (currentIndex > 0) {
                currentIndex--;
                updateContent(currentIndex);
                updateCarousel();
            }
        });

        next.addEventListener('click', () => {
            if (currentIndex < images.length - 1) {
                currentIndex++;
                updateContent(currentIndex);
                updateCarousel();
            }
        });

        function autoChange() {
            currentIndex = (currentIndex + 1) % activities.length;
            updateContent(currentIndex);
            updateCarousel();
        }

        setInterval(autoChange, 2000);

        updateCarousel();

        }

    </script>


