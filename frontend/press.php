<?php

include '../backend/Database/db.php';

$press_items = [];

$database = new Db();
$conn = $database->connect();

$sql = "SELECT * FROM blogs";

$stmt = $conn->prepare($sql);

$stmt->execute();

$res = $stmt->fetchAll(PDO::FETCH_ASSOC);

for ($i = 0; $i < count($res); $i++) {
    $press_items[] = $res[$i];
}

$article_id = isset($_GET['article']) ? (int)$_GET['article'] : null;
$current_article = null;

if ($article_id !== null && isset($press_items[$article_id])) {
    $current_article = $press_items[$article_id];
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Press - ATMABISWAS </title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="press.css">
    
    <link rel="icon" type="image/png" href="LOGO/NGO_logo_monogram.png">
</head>
<body>
    <div class="container">

        <?php if ($current_article): ?>
            <!-- Single Article View -->    
            <header>
                <h1>Press & Media – ATMABISWAS in Focus</h1>
                <p>Showcasing our work through national and regional media—covering our impact, initiatives, and stories
                    that inspire social transformation.
                </p>
            </header>
            <a href="?" class="back-button">
                <i class="fas fa-arrow-left"></i> Back to Press Coverage
            </a>

            <div class="article-container">
                <div class="article-header">
                    <h1 class="article-title"><?php echo $current_article['blog_title']; ?></h1>
                    <div class="article-meta">
                        <span><?php echo $current_article["upload_date"]; ?></span>
                        <span>|</span>
                        <span><i class="fas fa-newspaper"></i> <?php echo $current_article['blog_author']; ?></span>
                    </div>
                </div>

                <!-- Responsive Banner Image -->
                <div class="article-banner">
                    <img src="<?php echo $current_article['cover_img']; ?>" alt="Cover Image">
                </div>

                <div class="article-content">
                    <?php echo $current_article['blog_content']; ?>
                </div>

                <!-- Source Link -->
                <?php if (!empty($current_article['source_link'])): ?>
                    <div class="article-source">
                        Source: <a href="<?php echo $current_article['source_link']; ?>" target="_blank"
                            rel="noopener noreferrer">
                            <?php echo parse_url($current_article['source_link'], PHP_URL_HOST); ?>
                        </a>
                    </div>
                <?php endif; ?>
            </div>



        <?php else: ?>
            <?php include 'Navbar.php' ?>
            <header>
                <h1>Press & Media – ATMABISWAS</h1>
                <p>Showcasing our work through national and regional media—covering our impact, initiatives, and stories
                    that inspire social transformation.
                </p>
            </header>

            <div class="filters">
                <button class="filter-btn active" data-year="all">All Coverage</button>
                <button class="filter-btn" data-year="2025">2025</button>
                <button class="filter-btn" data-year="2024">2024</button>
                <button class="filter-btn" data-year="2023">2023</button>
            </div>

            <div class="press-grid">
                <?php if (empty($press_items)): ?>
                    <div class="empty-state">
                        <i class="far fa-newspaper"></i>
                        <h3>No press coverage yet</h3>
                        <p>Check back later for updates on our media appearances.</p>
                    </div>
                <?php else: ?>
                    <?php foreach ($press_items as $id => $item): ?>
                        <a href="?article=<?php echo $id; ?>" class="press-card-link">
                            <div class="press-card" data-year="<?php echo $item['year']; ?>">
                                <div class="card-image">
                                    <img src="<?php echo $item['cover_img']; ?>" alt="<?php echo $item['title']; ?>">
                                </div>
                                <div class="card-content">
                                    <span class="press-date"><?php echo $item["upload_date"]; ?></span>
                                    <h3 class="press-title"><?php echo $item['blog_title']; ?></h3>
                                    <div class="press-source">
                                        <i class="fas fa-newspaper"></i>
                                        <span><?php echo $item['blog_author']; ?></span>
                                    </div>
                                    <p class="press-summary"><?php echo $item['summary']; ?></p>
   
                   <div class="press-actions">

                   <?php

                   if(isset($_SESSION['username'])){
                    echo '   <a class="press-button update">
        <i style="margin-right:2px;" class="fas fa-sync-alt"></i> Update
    </a>';
                   }
                   
                   
                   ?>
 
    <button class="press-button read-more">
        Read More <i class="fas fa-arrow-right"></i>
    </button>
</div>

                                </div>
                            </div>
                        </a>
                    <?php endforeach; ?>
                <?php endif; ?>
            </div>
        <?php endif; ?>
    </div>
    <?php include 'footer.php' ?>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            <?php if (!$current_article): ?>
                // Filter functionality only on grid view
                const filterButtons = document.querySelectorAll('.filter-btn');
                const pressCards = document.querySelectorAll('.press-card');

                filterButtons.forEach(button => {
                    button.addEventListener('click', () => {
                        // Update active button
                        filterButtons.forEach(btn => btn.classList.remove('active'));
                        button.classList.add('active');

                        const year = button.dataset.year;

                        // Filter cards
                        pressCards.forEach(card => {
                            if (year === 'all' || card.dataset.year === year) {
                                card.style.display = 'block';
                            } else {
                                card.style.display = 'none';
                            }
                        });
                    });
                });

                // Intersection Observer for animations
                const observer = new IntersectionObserver((entries) => {
                    entries.forEach(entry => {
                        if (entry.isIntersecting) {
                            entry.target.classList.add('show');
                        }
                    });
                }, {
                    threshold: 0.1
                });

                document.querySelectorAll('.press-card').forEach(card => {
                    observer.observe(card);
                });
            <?php endif; ?>
        });
    </script>


</body>

</html>