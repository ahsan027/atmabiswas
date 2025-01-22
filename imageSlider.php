<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Image Slider</title>
    <style>
        /* body {
            font-family: Arial, sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
            width: 80vw;
            height: 80vh;
            margin: 0;
            background-color: #f0f0f0;
        } */


.slider {
    margin: 1rem auto; /* Center the slider horizontally */
    position: relative;
    width: 90%;
    max-width: 100%; /* Maximum width for larger screens */
    overflow: hidden;
    border-radius: 10px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    background-color: white;
}

.list {
    display: flex;
    transition: transform 0.5s ease;
}

.item {
    min-width: 100%;
    box-sizing: border-box;
}

.item img {
    width: 100%;
    border-radius: 10px;
}

.buttons {
    position: absolute;
    top: 50%;
    width: 100%;
    display: flex;
    justify-content: space-between;
    transform: translateY(-50%);
}

.buttons button {
    background-color: rgba(0, 0, 0, 0.5);
    border: none;
    color: white;
    padding: 10px;
    cursor: pointer;
}

.buttons button:hover {
    background-color: rgba(0, 0, 0, 0.8);
}

.dots {
    position: absolute;
    bottom: 10px;
    left: 50%;
    transform: translateX(-50%);
    display: flex;
}

.dots li {
    list-style: none;
    width: 10px;
    height: 10px;
    margin: 0 5px;
    background-color: rgba(0, 0, 0, 0.5);
    border-radius: 50%;
    cursor: pointer;
    transition: background-color 0.3s ease;
}

.dots li.active {
    background-color: rgba(0, 0, 0, 0.8);
}

/* Responsive Styles */
@media (max-width: 600px) {
    .slider {
        width: 100%; /* Full width on small screens */
        /* height: 80%; */
    }

    .buttons button {
        padding: 5px; /* Smaller buttons on small screens */
    }

    .dots li {
        width: 8px;
        height: 8px;
        margin: 0 3px;
    }
}

    </style>
</head>
<body>
    <div class="slider">
        <div class="list">
            <div class="item">
                <img src="https://venture.com.bd/wp-content/uploads/2021/01/Healthtech.jpg" alt="Slide 1">
            </div>
            <div class="item">
                <img src="https://venture.com.bd/wp-content/uploads/2021/01/Healthtech.jpg" alt="Slide 2">
            </div>
            <div class="item">
                <img src="https://venture.com.bd/wp-content/uploads/2021/01/Healthtech.jpg" alt="Slide 3">
            </div>
            <div class="item">
                <img src="https://venture.com.bd/wp-content/uploads/2021/01/Healthtech.jpg" alt="Slide 4">
            </div>
            <div class="item">
                <img src="https://venture.com.bd/wp-content/uploads/2021/01/Healthtech.jpg" alt="Slide 5">
            </div>
        </div>
        <div class="buttons">
            <button id="prev">&#10094;</button>
            <button id="next">&#10095;</button>
        </div>
        <ul class="dots">
            <li class="active"></li>
            <li></li>
            <li></li>
            <li></li>
            <li></li>
        </ul>
    </div>
    <script>
        let slider = document.querySelector('.slider .list');
        let items = document.querySelectorAll('.slider .list .item');
        let next = document.getElementById('next');
        let prev = document.getElementById('prev');
        let dots = document.querySelectorAll('.slider .dots li');

        let lengthItems = items.length - 1;
        let active = 0;

        function reloadSlider() {
            slider.style.transform = `translateX(-${items[active].offsetLeft}px)`;
            document.querySelector('.slider .dots li.active').classList.remove('active');
            dots[active].classList.add('active');
            clearInterval(refreshInterval);
            refreshInterval = setInterval(() => next.click(), 3000);
        }

        next.onclick = () => {
            active = active + 1 <= lengthItems ? active + 1 : 0;
            reloadSlider();
        };

        prev.onclick = () => {
            active = active - 1 >= 0 ? active - 1 : lengthItems;
            reloadSlider();
        };

        let refreshInterval = setInterval(() => next.click(), 3000);

        dots.forEach((dot, index) => {
            dot.addEventListener('click', () => {
                active = index;
                reloadSlider();
            });
        });

        window.onresize = reloadSlider;
    </script>
</body>
</html>
