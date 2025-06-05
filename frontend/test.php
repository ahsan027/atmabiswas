<script src='main.js'></script>

<div class="card-container">

    <div class="card">
        <img src="cow/cow_pic3.png" alt="Card Image">
        <div class="card-content">
            <h3>Cow Farming Success </h3>
            <p class="card-text">ATMABISWAS helped this woman expand her cow farm, boosting her income and independence.</p>
        </div>
    </div>
    <div class="card">
        <img src="fish&redy/15.jpg" alt="Card Image">
        <div class="card-content">
            <h3>Nourishing Aquatic Growth</h3>
            <p class="card-text">ATMABISWAS Ensures chemical & hazards free fish foods, fertilizers and pesticides to ensure the proper growth of fish keeping a safe environment.</p>
        </div>
    </div>
    <div class="card">
        <img src="rmpt/rmpt_pic2.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Supporting Fishermen's Growth</h3>
            <p class="card-text">ATMABISWAS empowers fishermen by providing free fish food and training to boost their livelihoods</p>
        </div>
    </div>
    <div class="card">
        <img src="Health/health_pic1.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Free Health Campaign </h3>
            <p class="card-text">At present we are arranging Free Medical Campaign and seminar for poor people without any cost, which is funded by ATMABISWAS. </p>
        </div>
    </div>
    <div class="card">
        <img src="fish/fish_pic1.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Health and Nutrition Fair</h3>
            <p class="card-text">ATMABISWAS organizes a Health & Nutrition Fair with free check-ups, nutrition guidance, and wellness programs for the community.</p>
        </div>
    </div>
    <div class="card">
        <img src="enterprise_development/enterprice_pic5.jpeg" alt="Card Image">
        <div class="card-content">
            <h3>Greener Fields Ahead</h3>
            <p class="card-text">ATMABISWAS supports farmers with free fertilizer, promoting sustainable agriculture and better harvests.</p>
        </div>
    </div>

</div>

<style>
.card-container {
    display: grid;
    grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
    gap: 30px;
    justify-content: center;
    align-items: stretch;
    place-items: center;
    max-width: 1200px;
    margin: 40px auto;
    padding: 0 20px;
}

.card {
    position: relative;
    width: 100%;
    max-width: 380px;
    border-radius: 15px;
    overflow: hidden;
    box-shadow: 0 10px 20px rgba(0, 0, 0, 0.08);
    cursor: pointer;
    transition: transform 0.4s ease-in-out, box-shadow 0.4s ease-in-out;
    background: #ffffff;
    display: flex;
    flex-direction: column;
    height: 100%;
}

.card:hover {
    transform: translateY(-12px);
    box-shadow: 0 15px 30px rgba(0, 0, 0, 0.15);
}

.card img {
    width: 100%;
    height: 220px;
    object-fit: cover;
    border-radius: 15px 15px 0 0;
}

.card-content {
    text-align: center;
    padding: 25px;
    background-color: #ffffff;
    flex-grow: 1;
    display: flex;
    flex-direction: column;
    justify-content: space-between;
}

.card h3 {
    margin: 0 0 12px 0;
    color: #333;
    font-size: 1.4em;
    font-weight: 700;
    font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
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
    background: rgba(0, 0, 0, 0.8);
    color: white;
    font-size: 1em;
    padding: 20px;
    box-sizing: border-box;
    opacity: 0;
    transition: opacity 0.3s ease-in-out;
    text-align: center;
    line-height: 1.6;
}

.card:hover .card-text {
    opacity: 1;
}

/* Responsive Design */
@media (max-width: 768px) {
    .card-container {
        grid-template-columns: repeat(auto-fit, minmax(280px, 1fr));
        gap: 20px;
    }

    .card img {
        height: 200px;
    }

    .card-content {
        padding: 15px;
    }

    .card h3 {
        font-size: 1.2em;
    }

    .card-text {
        font-size: 0.9em;
        padding: 15px;
    }
}

@media (max-width: 480px) {
    .card-container {
        grid-template-columns: repeat(1, 1fr);
        gap: 15px;
        padding: 0 10px;
    }

    .card {
        max-width: 100%;
    }

    .card img {
        height: 180px;
    }

    .card-content {
        padding: 10px;
    }

    .card h3 {
        font-size: 1.1em;
    }

    .card-text {
        font-size: 0.8em;
        padding: 10px;
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