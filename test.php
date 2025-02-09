<div class="card-container">
    <?php for ($i = 0; $i < 6; $i++): ?>
        <div class="card">
            <img src="pic.png" alt="Card Image">
            <div class="card-content">
                <h3>Card Title <?= $i + 1; ?></h3>
                <p class="card-text">More details about the content displayed on hover effect.</p>
            </div>
        </div>
    <?php endfor; ?>
</div>

<style>
    .card-container {


        display: flex;
        justify-content: center;
        gap: 20px;
        flex-wrap: wrap;
        padding: 20px;

    }

    .card {
        position: relative;
        width: 300px;
        border-radius: 10px;
        overflow: hidden;
        box-shadow: 0 4px 8px rgba(0, 0, 0, 0.2);
        cursor: pointer;
        transition: transform 0.3s ease;
    }

    .card:hover {
        transform: scale(1.05);
    }

    .card img {

        width: 100%;
        height: auto;
        border-radius: 10px;

    }

    .card-content {

        text-align: center;
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
        bottom: 0;
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
    @media (max-width: 768px) {
        .card {
            width: 90%;
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