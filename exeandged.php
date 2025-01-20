<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Page with Toggle and Animations</title>
    <style>


        /* Toggle button */
        body{
            /* background-color: red; */
        }
        .toggle-btn {
            width: 80%;
            background-color: #ffffff;
            color: #0073e6;
            padding: 10px 20px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            margin: 20px;
            font-size: 1rem;
            transition: background-color 0.3s;
        }

        .toggle-btn:hover {
            background-color: rgb(230, 230, 230);
            color: #005bb5;
        }

        /* Contact card styles */
        .contact-card {
            display: none;
            opacity: 0;
            transition: opacity 0.5s, transform 0.5s;
            transform: translateY(20px);
            width: 80%;
            margin: 20px auto;
            background-color: #ffffff;
            border: 1px solid #0073e6;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.1);
        }

        .contact-card.active {
            display: block;
            opacity: 1;
            transform: translateY(0);
        }

        .contact-info {
            padding: 20px;
            color: #0073e6;
        }

        .contact-info h2 {
            margin: 0;
            color: #005bb5;
        }

        .contact-info p {
            margin: 5px 0;
        }

        .map-container {
            height: 300px;
        }

        .map-container iframe {
            width: 100%;
            height: 100%;
            border: 0;
        }

        @media (max-width: 768px) {
            .navbar .bottom-row {
                flex-direction: column;
                align-items: center;
            }
        }

        .mainbody{
            display: flex;
            justify-content: center;
            align-items: center;
            flex-direction: column;
        }
    </style>
</head>

<body>


    <!-- Toggle Button -->
     <div class="mainbody">
    <button class="toggle-btn" id="toggle-btn">ATMABISWAS HQ</button>

    <!-- Contact Card -->
    <div class="contact-card" id="contact-card">
        <div class="contact-info">
            <h2>ATMABISWAS HQ</h2>
            <p><strong>Branch:</strong> ATMABISWAS, Main Office</p>
            <p><strong>Address:</strong> 123 Main Street, Dhaka, Bangladesh</p>
            <p><strong>Phone:</strong> +880-123-456-789</p>
            <p><strong>Email:</strong> contact@atmabiswas.org</p>
        </div>
        <div class="map-container">
            <iframe
                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3650.1218845770115!2d90.38619631536396!3d23.807097992000845!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3755c7b908896c17%3A0xa04f51e926d2f5a3!2sDhaka%2C%20Bangladesh!5e0!3m2!1sen!2sbd!4v1615917324239!5m2!1sen!2sbd"
                loading="lazy" allowfullscreen>
            </iframe>
        </div>
    </div>
</div>
    <script>
        const toggleBtn = document.getElementById('toggle-btn');
        const contactCard = document.getElementById('contact-card');

        toggleBtn.addEventListener('click', () => {
            if (contactCard.classList.contains('active')) {
                contactCard.style.opacity = '0';
                contactCard.style.transform = 'translateY(20px)';
                setTimeout(() => {
                    contactCard.classList.remove('active');
                }, 500); // Matches the transition duration
            } else {
                contactCard.classList.add('active');
                setTimeout(() => {
                    contactCard.style.opacity = '1';
                    contactCard.style.transform = 'translateY(0)';
                }, 0);
            }
        });
    </script>
</body>

</html>