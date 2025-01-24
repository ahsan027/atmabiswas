<section class="footer">
    <div class="footer-top">
        <div class="contact-info">
            <h4>Contact us</h4>
            <p>BRAC Centre, 75 Mohakhali, Dhaka-1212.</p>
            <p><strong>Tel:</strong> 88 02 2222 81265. <strong>E-mail:</strong> <a href="mailto:info@brac.net">info@brac.net</a></p>
        </div>
        
        <div class="social-media">
            <h4>Join the conversation</h4>
            <a href="#"><i class="fa-brands fa-facebook"></i></a>
            <a href="#"><i class="fa-brands fa-instagram"></i></a>
            <a href="#"><i class="fa-brands fa-youtube"></i></a>
            <a href="#"><i class="fa-brands fa-linkedin"></i></a>
            
        </div>
    </div>
    <hr>
    <div class="footer-bottom">
        <h4>What we do</h4>
        <div class="footer-columns">
            <ul>
                <li>Ultra-poor graduation</li>
                <li>Integrated development</li>
                <li>Microfinance</li>
                <li>Skills development</li>
                <li>Migration</li>
            </ul>
            <ul>
                <li>Climate change</li>
                <li>Disaster risk management</li>
                <li>Gender justice and diversity</li>
                <li>Social empowerment and legal protection</li>
                <li>Strengthening Bangladesh’s RMG sector</li>
            </ul>
            <ul>
                <li>Health</li>
                <li>Water, sanitation and hygiene</li>
                <li>Urban development</li>
                <li>Education</li>
                <li>Youth platform</li>
            </ul>
        </div>
    </div>
</section>

<style>
.footer {
    background-color: #05252F;
    color: white;
    padding: 40px 20px;
    font-family: Arial, sans-serif;
}

.footer-top {
    display: flex;
    justify-content: space-between;
    align-items: center;
    flex-wrap: wrap;
    gap: 20px;
}

.contact-info h4, 
.social-media h4 {
    font-size: 1.5em;
    margin-bottom: 10px;
}

.contact-info p {
    margin: 5px 0;
    color: #9ca6af;
}

.nav-links a {
    color: white;
    text-decoration: none;
    margin-right: 10px;
    font-weight: bold;
}

.nav-links a:hover {
    text-decoration: underline;
}

.social-media a i {
    font-size: 2rem;
    width: 40px;
    margin-right: 10px;
}
.social-media a {
color: #9ca6af;
}
.download-btn {
    background-color: #ff007f;
    color: white;
    border: none;
    padding: 10px 20px;
    font-size: 1em;
    border-radius: 5px;
    cursor: pointer;
    margin-top: 10px;
}

.download-btn:hover {
    background-color: #e6006e;
}

.footer-bottom h4 {
    font-size: 1.5em;
    margin-bottom: 20px;
}

.footer-columns {
    display: flex;
    justify-content: space-between;
    flex-wrap: wrap;
}

.footer-columns ul {
    list-style-type: none;
    padding: 0;
}

.footer-columns ul li {
    margin-bottom: 10px;
    color: #9ca6af;
}

@media (max-width: 768px) {
    .footer-top, .footer-columns {
        flex-direction: column;
        text-align: center;
    }

    .footer-columns ul {
        margin-bottom: 20px;
    }

    .social-media {
        text-align: center;
    }
}
</style>
