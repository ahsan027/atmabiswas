<div class="card-container">

    <div class="card">
        <img src="pic.png" alt="Card Image">
        <div class="card-content">
            <h3>Card Title </h3>
            <p class="card-text">More details about the content displayed on hover effect.</p>
        </div>
    </div>
    <div class="card">
        <img src="fishredy/15.jpg" alt="Card Image">
        <div class="card-content">
            <h3>Card Title </h3>
            <p class="card-text">More details about the content displayed on hover effect.</p>
        </div>
    </div>
    <div class="card">
        <img src="rmpt/rmpt_pic2.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Card Title </h3>
            <p class="card-text">More details about the content displayed on hover effect.</p>
        </div>
    </div>
    <div class="card">
        <img src="Health/health_pic1.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Card Title </h3>
            <p class="card-text">Free health checkup for all.</p>
        </div>
    </div>
    <div class="card">
        <img src="FISH/fish_pic1.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Health and Nutrition Faire</h3>
            <p class="card-text">More details about the content displayed on hover effect.</p>
        </div>
    </div>
    <div class="card">
        <img src="enterprise_development/enterprice_pic5.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Card Title </h3>
            <p class="card-text">More details about the content displayed on hover effect.</p>
        </div>
    </div>

</div>

<style>
    .card-container {
        display: grid;
        grid-template-columns: repeat(3, minmax(300px, 1fr));
        gap: 20px;
        justify-content: center;
        align-items: center;
        place-items: center;
        width: 100%;
        margin: auto;
        padding: 20px;
    }

    .card {
        position: relative;
        width: 80%;

        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: transform 0.3s ease;
        background: #fff;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {
        width: 100%;
        height: 10rem;
        border-radius: 10px;
    }

    .card-content {
        text-align: center;
        padding: 15px;
        background-color: #ffffff;
    }

    .card h3 {
        margin: 0;
        color: #0073e6;
        font-size: 1.5em;
    }

    .card-text {
        position: absolute;
        top: 0;
        left: 0;
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
        background: rgba(0, 0, 0, 0.7);
        color: white;
        font-size: 1.2em;
        opacity: 0;
        transition: opacity 0.3s ease;
        text-align: center;
    }

    .card:hover .card-text {
        opacity: 1;
    }

    /* Responsive Design */
    @media (max-width: 1024px) {
        .card-container {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
    }

    @media (max-width: 768px) {
        .card-container {
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
        }
    }

    @media (max-width: 480px) {
        .card-container {
            grid-template-columns: repeat(1, minmax(250px, 1fr));
        }
    }
</style>

<script>
    document.querySelectorAll('.card').forEach(card => {

        card.addEventListener('mouseenter', () => {
            card.querySelector('.card-text').style.opacity = '1';
        });

        card.addEventListener('mouseleave', () => {
            card.querySelector('.card-text').style.opacity = '0';
        });

    });
</script>