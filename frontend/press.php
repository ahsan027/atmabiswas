<?php
// Sample array of press coverage items
$press_items = [
    [
        'date' => '2025-05-10',
        'title' => 'Our Work Featured on BDTV',
        'source' => 'BDTV News',
        'summary' => 'A detailed interview discussing our educational outreach.',
        'type' => 'video',
        'url' => 'https://www.youtube.com/embed/abc123', // Changed to embed URL
        'year' => 2025,
        'thumbnail' => 'https://images.unsplash.com/photo-1574717024453-3545edf62d91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'content' => '<p>This is the full content of the BDTV feature. Here you can provide all the details about the interview, the topics discussed, and any important points that were covered.</p>
                     <p>You can include paragraphs, images, and even embedded content like the video below:</p>
                     <div class="video-container">
                        <iframe width="100%" height="400" src="https://www.youtube.com/embed/abc123" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                     </div>'
    ],
    [
        'date' => '2024-11-20',
        'title' => 'E-Waste Initiative in National Daily',
        'source' => 'The Daily Star',
        'summary' => 'Our campaign to reduce electronic waste was featured in the daily paper.',
        'type' => 'pdf',
        'url' => 'sample-article.pdf',
        'year' => 2024,
        'thumbnail' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
        'content' => '<p>This is the full article from The Daily Star about our e-waste initiative. You can include the complete text here, along with any images or supporting materials.</p>
                     <p>The article highlights our efforts to reduce electronic waste through community programs and partnerships with local businesses.</p>
                     <p><a href="sample-article.pdf" class="download-pdf" download>Download PDF Version</a></p>'
    ],
    [
        'date' => '2024-08-15',
        'title' => 'Tech Innovation Award Coverage',
        'source' => 'Tech Today',
        'summary' => 'Our latest technology innovation received the annual industry award.',
        'type' => 'article',
        'url' => '#',
        'year' => 2024,
        'thumbnail' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80',
        'content' => '<p>Complete coverage of our Tech Innovation Award from Tech Today magazine. This section can include the full text of the article, interviews with team members, and details about the technology that won the award.</p>
                     <p>You might want to include:</p>
                     <ul>
                        <li>Background on the technology</li>
                        <li>Quotes from the development team</li>
                        <li>Impact on the industry</li>
                        <li>Future development plans</li>
                     </ul>'
    ],
    [
        'date' => '2023-12-05',
        'title' => 'Community Impact Report',
        'source' => 'Social Chronicle',
        'summary' => 'Feature story about our community development initiatives.',
        'type' => 'article',
        'url' => '#',
        'year' => 2023,
        'thumbnail' => 'https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80',
        'content' => '<p>Full text of the Community Impact Report feature from Social Chronicle. This can be a detailed account of our community programs, with statistics, success stories, and testimonials from participants.</p>
                     <p>Consider including:</p>
                     <ul>
                        <li>Program descriptions</li>
                        <li>Impact metrics</li>
                        <li>Participant stories</li>
                        <li>Future community initiatives</li>
                     </ul>'
    ]
];

// Check if we're viewing a single article
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
    <title>ATMABISWAS Press</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <link rel="stylesheet" href="press.css">
</head>

<body>
    <div class="container">
        <?php if ($current_article): ?>
        <!-- Single Article View -->
        <a href="?" class="back-button">
            <i class="fas fa-arrow-left"></i> Back to Press Coverage
        </a>

        <div class="article-container">
            <div class="article-header">
                <h1 class="article-title"><?php echo $current_article['title']; ?></h1>
                <div class="article-meta">
                    <span><?php echo date('F j, Y', strtotime($current_article['date'])); ?></span>
                    <span>|</span>
                    <span><i class="fas fa-newspaper"></i> <?php echo $current_article['source']; ?></span>
                </div>
            </div>

            <div class="article-content">
                <?php echo $current_article['content']; ?>
            </div>
        </div>
        <?php else: ?>
        <?php include 'Navbar.php' ?>
        <header>
            <h1>ABCD Advancing Green Energy for a Sustainable Future</h1>
            <p>ABCD ATMABISWAS promotes renewable energy solutions to reduce carbon footprints and ensure energy
                accessibility.
            </p>
        </header>

        <!-- Press Coverage Grid View -->



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
            <div class="press-card" data-year="<?php echo $item['year']; ?>">
                <div class="card-image">
                    <img src="<?php echo $item['thumbnail']; ?>" alt="<?php echo $item['title']; ?>">
                </div>
                <div class="card-content">
                    <span class="press-date"><?php echo date('F j, Y', strtotime($item['date'])); ?></span>
                    <h3 class="press-title"><?php echo $item['title']; ?></h3>
                    <div class="press-source">
                        <i class="fas fa-newspaper"></i>
                        <span><?php echo $item['source']; ?></span>
                    </div>
                    <p class="press-summary"><?php echo $item['summary']; ?></p>
                    <div class="press-actions">
                        <span class="press-type">
                            <?php
                                        switch ($item['type']) {
                                            case 'video':
                                                echo '<i class="fas fa-play-circle"></i> Video';
                                                break;
                                            case 'pdf':
                                                echo '<i class="fas fa-file-pdf"></i> PDF';
                                                break;
                                            default:
                                                echo '<i class="fas fa-newspaper"></i> Article';
                                        }
                                        ?>
                        </span>
                        <a href="?article=<?php echo $id; ?>" class="press-link">
                            <?php
                                        switch ($item['type']) {
                                            case 'video':
                                                echo 'Watch';
                                                break;
                                            case 'pdf':
                                                echo 'View PDF';
                                                break;
                                            default:
                                                echo 'Read More';
                                        }
                                        ?>
                            <i class="fas fa-arrow-right"></i>
                        </a>
                    </div>
                </div>
            </div>
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