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
  <title><?php echo $current_article ? $current_article['title'] : 'Press Coverage'; ?></title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
  <style>
    :root {
      --primary-color: #2563eb;
      --primary-light: #3b82f6;
      --secondary-color: #f59e0b;
      --dark-color: #1e293b;
      --light-color: #f8fafc;
      --gray-color: #64748b;
      --card-bg: #ffffff;
      --transition: all 0.3s cubic-bezier(0.25, 0.8, 0.25, 1);
      --shadow-sm: 0 1px 3px rgba(0, 0, 0, 0.12);
      --shadow-md: 0 4px 6px rgba(0, 0, 0, 0.1);
      --shadow-lg: 0 10px 25px rgba(0, 0, 0, 0.1);
      --radius-sm: 8px;
      --radius-md: 12px;
      --radius-lg: 16px;
    }

    * {
      margin: 0;
      padding: 0;
      box-sizing: border-box;
    }

    body {
      font-family: 'Inter', -apple-system, BlinkMacSystemFont, sans-serif;
      background-color: #f1f5f9;
      color: var(--dark-color);
      line-height: 1.6;
    }

    .container {
      max-width: 1200px;
      margin: 0 auto;
      padding: 2rem;
    }

    .header {
      text-align: center;
      margin-bottom: 3rem;
    }

    .header h1 {
      font-size: 2.5rem;
      font-weight: 700;
      color: var(--dark-color);
      margin-bottom: 0.5rem;
      background: linear-gradient(90deg, var(--primary-color), var(--secondary-color));
      -webkit-background-clip: text;
      -webkit-text-fill-color: transparent;
      display: inline-block;
    }

    .header p {
      font-size: 1.1rem;
      color: var(--gray-color);
      max-width: 600px;
      margin: 0 auto;
    }

    .filters {
      display: flex;
      justify-content: center;
      flex-wrap: wrap;
      gap: 0.75rem;
      margin-bottom: 2.5rem;
    }

    .filter-btn {
      padding: 0.5rem 1.25rem;
      border-radius: 2rem;
      border: none;
      background-color: var(--light-color);
      color: var(--gray-color);
      font-weight: 500;
      cursor: pointer;
      transition: var(--transition);
      box-shadow: var(--shadow-sm);
    }

    .filter-btn:hover {
      background-color: #e2e8f0;
      transform: translateY(-2px);
    }

    .filter-btn.active {
      background-color: var(--primary-color);
      color: white;
    }

    .press-grid {
      display: grid;
      grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
      gap: 1.5rem;
    }

    .press-card {
      background-color: var(--card-bg);
      border-radius: var(--radius-md);
      overflow: hidden;
      box-shadow: var(--shadow-md);
      transition: var(--transition);
      opacity: 0;
      transform: translateY(20px);
    }

    .press-card.show {
      opacity: 1;
      transform: translateY(0);
    }

    .press-card:hover {
      transform: translateY(-5px);
      box-shadow: var(--shadow-lg);
    }

    .card-image {
      height: 180px;
      overflow: hidden;
    }

    .card-image img {
      width: 100%;
      height: 100%;
      object-fit: cover;
      transition: var(--transition);
    }

    .press-card:hover .card-image img {
      transform: scale(1.05);
    }

    .card-content {
      padding: 1.5rem;
    }

    .press-date {
      display: inline-block;
      font-size: 0.85rem;
      color: var(--primary-color);
      background-color: #dbeafe;
      padding: 0.25rem 0.75rem;
      border-radius: 2rem;
      margin-bottom: 0.75rem;
      font-weight: 500;
    }

    .press-title {
      font-size: 1.25rem;
      font-weight: 600;
      margin-bottom: 0.75rem;
      color: var(--dark-color);
      line-height: 1.4;
    }

    .press-source {
      display: flex;
      align-items: center;
      gap: 0.5rem;
      font-size: 0.9rem;
      color: var(--gray-color);
      margin-bottom: 1rem;
    }

    .press-source i {
      color: var(--secondary-color);
    }

    .press-summary {
      font-size: 0.95rem;
      color: var(--gray-color);
      margin-bottom: 1.5rem;
      line-height: 1.6;
    }

    .press-actions {
      display: flex;
      justify-content: space-between;
      align-items: center;
    }

    .press-type {
      font-size: 0.8rem;
      text-transform: uppercase;
      letter-spacing: 0.05em;
      font-weight: 600;
      color: var(--primary-color);
    }

    .press-link {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      background-color: var(--primary-color);
      color: white;
      border-radius: var(--radius-sm);
      text-decoration: none;
      font-weight: 500;
      font-size: 0.9rem;
      transition: var(--transition);
    }

    .press-link:hover {
      background-color: var(--primary-light);
      transform: translateY(-2px);
    }

    .press-link i {
      font-size: 0.8rem;
    }

    .empty-state {
      grid-column: 1 / -1;
      text-align: center;
      padding: 3rem;
      color: var(--gray-color);
    }

    .empty-state i {
      font-size: 3rem;
      color: #cbd5e1;
      margin-bottom: 1rem;
    }

    /* Article page styles */
    .article-container {
      background-color: white;
      border-radius: var(--radius-md);
      padding: 2rem;
      box-shadow: var(--shadow-md);
      max-width: 800px;
      margin: 0 auto;
    }

    .article-header {
      margin-bottom: 2rem;
      text-align: center;
    }

    .article-title {
      font-size: 2rem;
      margin-bottom: 1rem;
      color: var(--dark-color);
    }

    .article-meta {
      display: flex;
      justify-content: center;
      align-items: center;
      gap: 1rem;
      margin-bottom: 1rem;
      color: var(--gray-color);
    }

    .article-content {
      line-height: 1.8;
    }

    .article-content img {
      max-width: 100%;
      height: auto;
      border-radius: var(--radius-sm);
      margin: 1rem 0;
    }

    .article-content .video-container {
      position: relative;
      padding-bottom: 56.25%;
      height: 0;
      overflow: hidden;
      margin: 1.5rem 0;
    }

    .article-content .video-container iframe {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      border: none;
      border-radius: var(--radius-sm);
    }

    .back-button {
      display: inline-flex;
      align-items: center;
      gap: 0.5rem;
      padding: 0.5rem 1rem;
      background-color: var(--primary-color);
      color: white;
      border-radius: var(--radius-sm);
      text-decoration: none;
      font-weight: 500;
      margin-bottom: 2rem;
      transition: var(--transition);
    }

    .back-button:hover {
      background-color: var(--primary-light);
      transform: translateY(-2px);
    }

    .download-pdf {
      display: inline-block;
      padding: 0.75rem 1.5rem;
      background-color: var(--secondary-color);
      color: white;
      border-radius: var(--radius-sm);
      text-decoration: none;
      font-weight: 500;
      margin: 1rem 0;
      transition: var(--transition);
    }

    .download-pdf:hover {
      background-color: #e69009;
      transform: translateY(-2px);
    }

    @media (max-width: 768px) {
      .container {
        padding: 1.5rem;
      }
      
      .header h1 {
        font-size: 2rem;
      }
      
      .press-grid {
        grid-template-columns: 1fr;
      }

      .article-title {
        font-size: 1.5rem;
      }
    }

    /* Animation delays for cards */
    .press-card:nth-child(1) { transition-delay: 0.1s; }
    .press-card:nth-child(2) { transition-delay: 0.2s; }
    .press-card:nth-child(3) { transition-delay: 0.3s; }
    .press-card:nth-child(4) { transition-delay: 0.4s; }
    .press-card:nth-child(5) { transition-delay: 0.5s; }
    .press-card:nth-child(6) { transition-delay: 0.6s; }
  </style>
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
      <!-- Press Coverage Grid View -->
      <div class="header">
        <h1>Media Coverage</h1>
        <p>Explore our latest features, interviews, and press mentions from leading publications worldwide.</p>
      </div>

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
                      switch($item['type']) {
                        case 'video': echo '<i class="fas fa-play-circle"></i> Video'; break;
                        case 'pdf': echo '<i class="fas fa-file-pdf"></i> PDF'; break;
                        default: echo '<i class="fas fa-newspaper"></i> Article';
                      }
                    ?>
                  </span>
                  <a href="?article=<?php echo $id; ?>" class="press-link">
                    <?php 
                      switch($item['type']) {
                        case 'video': echo 'Watch'; break;
                        case 'pdf': echo 'View PDF'; break;
                        default: echo 'Read More';
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