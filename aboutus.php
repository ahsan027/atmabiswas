<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMABISWAS - About us</title>
</head>
<style>

    body{
        background-color:rgb(218, 237, 255);
    }
    .container_aboutus {
    width: 90%;
    max-width: 1200px;
    margin: 2% auto;
    padding: 20px;
    background-color: #ffffff;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    border-radius: 10px;
    overflow: hidden;
    opacity: 0;
    transition: opacity 2s;
}

.container_aboutus.show {
    opacity: 1;
}

h1, h2 {
    color: #0073e6;
}

p {
    margin: 1em 0;
}

ul {
    padding-left: 20px;
}

/* Responsive Styles */
@media (max-width: 768px) {
    body{
        padding: 1rem;
    }
   

    .container_aboutus {
        width: 100%;
        margin: 0;
        padding: 10px;
        margin-right: 1rem;
        border-radius: 5px;
    }

    h1, h2 {
        font-size: 1.5rem;
    }

    p, ul {
        font-size: 1rem;
    }
}

        @media (min-width:768px) {
            .container_aboutus{
                padding: 1rem;
            }
            
        }
</style>
<body>
    <div class="container_aboutus fade-in">
        <h1>About Us</h1>
        <div class="fade">
            <h2>Welcome to Atmabiswas!</h2>
            <p>We are dedicated to empowering individuals and fostering self-belief. Our mission is to create a positive impact on society by providing support, resources, and opportunities for personal growth and development.</p>
            
            <h2>Our Vision</h2>
            <p>To build a world where everyone believes in their potential and has the tools to achieve their dreams.</p>
            
            <h2>Our Mission</h2>
            <ul>
                <li>Empowerment: Providing resources and opportunities for personal and professional growth.</li>
                <li>Support: Offering guidance and assistance to individuals in need.</li>
                <li>Community: Creating a supportive network that fosters collaboration and mutual growth.</li>
            </ul>
            
            <h2>Our Values</h2>
            <ul>
                <li>Integrity: We uphold the highest standards of integrity in all our actions.</li>
                <li>Respect: We value each individual and treat everyone with respect and dignity.</li>
                <li>Innovation: We embrace change and constantly seek new ways to achieve our mission.</li>
            </ul>
            
            <h2>Our Team</h2>
            <p>Our team is composed of dedicated professionals who are passionate about making a difference. We work together to create a positive impact and support each other in our journey.</p>
            
            <h2>Get Involved</h2>
            <p>Join us in our mission to empower and support individuals. There are many ways to get involved:</p>
            <ul>
                <li>Volunteer: Share your skills and time to make a difference.</li>
                <li>Donate: Support our initiatives with your generous contributions.</li>
                <li>Partner: Collaborate with us to create impactful programs and events.</li>
            </ul>
        </div>
    </div>
    <script>
        window.addEventListener("scroll", () => {
  const container = document.querySelector(".container_aboutus");
  const scrollPosition = window.scrollY + window.innerHeight;
  // console.log(window.scrollY + window.innerHeight);
  if (scrollPosition > container.offsetTop) {
    container.classList.add("show");
  }
});


    </script>
    
</body>
</html>