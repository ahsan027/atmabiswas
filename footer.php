<link rel="stylesheet" href="foot.css">


<footer class="footer">
    <div class="footer-container">
        <div class="footer-content">
            <h5>ATMABISWAS</h5>

            <p>HQ:Here you can use rows and columns to organize your footer content. Lorem ipsum dolor sit amet,
                consectetur adipisicing elit.</p>
        </div>
        <div class="footer-links">
            <h5>LINKS</h5>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
            </ul>
        </div>
        <div class="footer-links">
            <h5>LINKS</h5>
            <ul>
                <li><a href="#">Link 1</a></li>
                <li><a href="#">Link 2</a></li>
                <li><a href="#">Link 3</a></li>
                <li><a href="#">Link 4</a></li>
            </ul>
        </div>
        
    </div>

    <div class="footer-signup">
        
        <button id="scrollToTopBtn" class="signup-btn">Back to Top</button>
        <p>Stay connected with ATMABISWAS</p>
    <div class="footer-social">
        <a href="#"><i class="fab fa-facebook-f"></i></a>
        <a href="#"><i class="fab fa-twitter"></i></a>
        <a href="#"><i class="fab fa-google-plus-g"></i></a>
        <a href="#"><i class="fab fa-linkedin-in"></i></a>
        <a href="#"><i class="fab fa-dribbble"></i></a>
    </div>

    <div class="footer-copyright">
        &copy; 2020 Copyright: <a href="#">MDBootstrap.com</a>
    </div>
    </div>

</footer>
<script>
    // Get the button
const scrollToTopBtn = document.getElementById('scrollToTopBtn');

// Add an event listener to the button to scroll to the top when clicked
scrollToTopBtn.addEventListener('click', () => {
    window.scrollTo({
        top: 0,
        behavior: 'smooth'
    });
});

// Show the button when the user scrolls down
window.addEventListener('scroll', () => {
    if (window.scrollY > 200) {
        scrollToTopBtn.style.display = 'block';
    } else {
        scrollToTopBtn.style.display = 'none';
    }
});

</script>
<script src="https://kit.fontawesome.com/a076d05399.js" crossorigin="anonymous"></script>