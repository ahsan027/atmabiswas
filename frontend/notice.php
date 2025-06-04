<?php
// Sample array of press coverage items
// $press_items = [
//     [
//         'date' => '2025-05-10',
//         'title' => 'Our Work Featured on BDTV',
//         'source' => 'BDTV News',
//         'summary' => 'A detailed interview discussing our educational outreach.',
//         'type' => 'video',
//         'url' => 'https://www.youtube.com/embed/abc123', // Changed to embed URL
//         'year' => 2025,
//         'thumbnail' => 'https://images.unsplash.com/photo-1574717024453-3545edf62d91?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
//         'content' => '<p>This is the full content of the BDTV feature. Here you can provide all the details about the interview, the topics discussed, and any important points that were covered.</p>
//                      <p>You can include paragraphs, images, and even embedded content like the video below:</p>
//                      <div class="video-container">
//                         <iframe width="100%" height="400" src="https://www.youtube.com/embed/abc123" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
//                      </div>'
//     ],
//     [
//         'date' => '2024-11-20',
//         'title' => 'E-Waste Initiative in National Daily',
//         'source' => 'The Daily Star',
//         'summary' => 'Our campaign to reduce electronic waste was featured in the daily paper.',
//         'type' => 'pdf',
//         'url' => 'sample-article.pdf',
//         'year' => 2024,
//         'thumbnail' => 'https://images.unsplash.com/photo-1504711434969-e33886168f5c?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1470&q=80',
//         'content' => '<p>This is the full article from The Daily Star about our e-waste initiative. You can include the complete text here, along with any images or supporting materials.</p>
//                      <p>The article highlights our efforts to reduce electronic waste through community programs and partnerships with local businesses.</p>
//                      <p><a href="sample-article.pdf" class="download-pdf" download>Download PDF Version</a></p>'
//     ],
//     [
//         'date' => '2024-08-15',
//         'title' => 'Tech Innovation Award Coverage',
//         'source' => 'Tech Today',
//         'summary' => 'Our latest technology innovation received the annual industry award.',
//         'type' => 'article',
//         'url' => '#',
//         'year' => 2024,
//         'thumbnail' => 'https://images.unsplash.com/photo-1467232004584-a241de8bcf5d?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80',
//         'content' => '<p>Complete coverage of our Tech Innovation Award from Tech Today magazine. This section can include the full text of the article, interviews with team members, and details about the technology that won the award.</p>
//                      <p>You might want to include:</p>
//                      <ul>
//                         <li>Background on the technology</li>
//                         <li>Quotes from the development team</li>
//                         <li>Impact on the industry</li>
//                         <li>Future development plans</li>
//                      </ul>'
//     ],
//     [
//         'date' => '2023-12-05',
//         'title' => 'Community Impact Report',
//         'source' => 'Social Chronicle',
//         'summary' => 'Feature story about our community development initiatives.',
//         'type' => 'article',
//         'url' => '#',
//         'year' => 2023,
//         'thumbnail' => 'https://images.unsplash.com/photo-1521791055366-0d553872125f?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1469&q=80',
//         'content' => '<p>Full text of the Community Impact Report feature from Social Chronicle. This can be a detailed account of our community programs, with statistics, success stories, and testimonials from participants.</p>
//                      <p>Consider including:</p>
//                      <ul>
//                         <li>Program descriptions</li>
//                         <li>Impact metrics</li>
//                         <li>Participant stories</li>
//                         <li>Future community initiatives</li>
//                      </ul>'
//     ]
// ];

// // Check if we're viewing a single article
// $article_id = isset($_GET['article']) ? (int)$_GET['article'] : null;
// $current_article = null;

// if ($article_id !== null && isset($press_items[$article_id])) {
//     $current_article = $press_items[$article_id];
// }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMABISWAS Press</title>
    <link rel="stylesheet" href="notice.css">
</head>

<body>
    <?php include 'Navbar.php' ?>

    <div class="container">
        <div class="grid">

            <!-- Card 3 -->
            <a href="../uploads/pdfs/Notice_Dhonnn_2025-06-04_3.pdf" target="_blank" class="card-link">
                <embed class="card-embed" src="../uploads/pdfs/Notice_Dhonnn_2025-06-04_3.pdf"></embed>
                <div class="card-footer">
                    <h2>Document 3</h2>
                </div>
            </a>


        </div>
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