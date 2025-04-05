<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Press - ATMABISWAS</title>
    <link rel="stylesheet" href="green.css">
    <link rel="stylesheet" href="press.css">

</head>

<body>
    <?php include 'Navbar.php'; ?>

    <header>
        <!-- You can add additional header content here if needed -->
        <h1>Media Spotlight</h1>
    </header>

    <div class="container">
        <div class="news-grid">
            <!-- Article 1 -->
            <div class="news-card">
                <div class="card-image">
                    <img src="https://source.unsplash.com/random/800x600?tech" alt="Tech News">
                </div>
                <div class="card-content">
                    <span class="category-tag">Technology</span>
                    <h2 class="card-title">Quantum Computing Breakthrough</h2>
                    <p class="card-excerpt">Researchers announce major advancements in quantum computing that could revolutionize data processing...</p>
                    <button class="read-more-btn"
                        data-title="Quantum Computing Breakthrough"
                        data-category="Technology"
                        data-image="https://source.unsplash.com/random/800x600?tech"
                        data-content="<p>In a groundbreaking development, scientists at Quantum Labs have achieved a major milestone in quantum computing stability. The team successfully maintained quantum coherence for over 5 minutes at room temperature, a feat previously thought impossible.</p>
                               <p>This breakthrough paves the way for practical quantum computing applications in fields ranging from drug discovery to climate modeling. The research team utilized a novel approach combining...</p>">
                        Read More
                    </button>
                </div>
            </div>

            <!-- Article 2 -->
            <div class="news-card">
                <div class="card-image">
                    <img src="https://source.unsplash.com/random/800x600?space" alt="Space News">
                </div>
                <div class="card-content">
                    <span class="category-tag">Space Exploration</span>
                    <h2 class="card-title">Mars Colony Initiative</h2>
                    <p class="card-excerpt">International space agencies reveal ambitious plans for permanent human settlement on Mars...</p>
                    <button class="read-more-btn"
                        data-title="Mars Colony Initiative"
                        data-category="Space Exploration"
                        data-image="https://source.unsplash.com/random/800x600?space"
                        data-content="<p>The Global Space Alliance has unveiled its Mars Colonization Program, aiming to establish a sustainable human presence on the Red Planet by 2040. The $500 billion initiative involves...</p>
                               <p>Key features of the plan include modular habitat designs, in-situ resource utilization systems, and advanced life support technologies. NASA administrator stated...</p>">
                        Read More
                    </button>
                </div>
            </div>

            <!-- Article 3 -->
            <div class="news-card">
                <div class="card-image">
                    <img src="https://source.unsplash.com/random/800x600?health" alt="Health News">
                </div>
                <div class="card-content">
                    <span class="category-tag">Medical Science</span>
                    <h2 class="card-title">Cancer Treatment Revolution</h2>
                    <p class="card-excerpt">New targeted therapy shows 90% success rate in early clinical trials for lung cancer...</p>
                    <button class="read-more-btn"
                        data-title="Cancer Treatment Revolution"
                        data-category="Medical Science"
                        data-image="https://source.unsplash.com/random/800x600?health"
                        data-content="<p>Researchers at BioMed Innovations have developed a revolutionary cancer treatment that selectively targets malignant cells while preserving healthy tissue. The new therapy...</p>
                               <p>Phase II clinical trials involving 300 patients showed remarkable results, with 90% of participants experiencing complete remission. Lead researcher Dr. Sarah Johnson explained...</p>">
                        Read More
                    </button>
                </div>
            </div>
        </div>
    </div>

    <!-- Modal -->
    <div class="modal-overlay" id="modal">
        <div class="modal-content">
            <button class="modal-close">&times;</button>
            <img class="modal-image" id="modalImage" alt="Article Image">
            <span class="category-tag" id="modalCategory"></span>
            <h1 class="modal-title" id="modalTitle"></h1>
            <div class="modal-body" id="modalContent"></div>
        </div>
    </div>

    <?php include 'footer.php'; ?>

</body>

</html>