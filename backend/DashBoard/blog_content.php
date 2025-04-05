<?php
// display_blog.php
try {
  // Database connection
  $pdo = new PDO("mysql:host=localhost;dbname=atmabiswas;charset=utf8mb4", 'root', '');
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);

  // Get blog ID from URL
  $blogId = filter_input(INPUT_GET, 'id', FILTER_VALIDATE_INT);
  if (!$blogId) throw new Exception('Invalid blog ID');

  // Fetch blog post
  $stmt = $pdo->prepare("SELECT * FROM blogs WHERE blog_id = ?");
  $stmt->execute([$blogId]);
  $post = $stmt->fetch(PDO::FETCH_ASSOC);

  if (!$post) throw new Exception('Blog post not found');
} catch (Exception $e) {
  die("Error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= htmlspecialchars($post['blog_title']) ?></title>
  <style>
    /* Mirror editor styles */
    .blog-container {
      max-width: 800px;
      margin: 0 auto;
      padding: 2rem;
      font-family: Arial, sans-serif;
    }

    .blog-content {
      line-height: 1.6;
      color: #333;
    }

    .blog-content h1 {
      font-size: 2.5rem;
      margin: 2rem 0;
      color: #2c3e50;
    }

    .blog-content h2 {
      font-size: 2rem;
      margin: 1.5rem 0;
      color: #34495e;
    }

    .blog-content h3 {
      font-size: 1.75rem;
      margin: 1.25rem 0;
      color: #7f8c8d;
    }

    .blog-content blockquote {
      border-left: 4px solid #bdc3c7;
      margin: 1.5rem 0;
      padding: 0.5rem 1.5rem;
      color: #7f8c8d;
      font-style: italic;
    }

    .blog-content a {
      color: #2980b9;
      text-decoration: underline;
    }

    .blog-content ul,
    .blog-content ol {
      margin: 1rem 0;
      padding-left: 2rem;
    }

    .blog-content strong {
      font-weight: bold;
    }

    .blog-content em {
      font-style: italic;
    }

    .blog-content u {
      text-decoration: underline;
    }
  </style>
</head>

<body>
  <div class="blog-container">
    <article class="blog-content">
      <!-- Safe output for title -->
      <h1><?= htmlspecialchars($post['blog_title']) ?></h1>

      <!-- Raw HTML output for content (already sanitized) -->
      <div class="blog-content">
        <?= $post['blog_content'] ?>
      </div>

      <!-- Post metadata -->
      <div class="post-meta">
        <p>Author: <?= htmlspecialchars($post['blog_author']) ?></p>
        <p>Published: <?= date('F j, Y', strtotime($post['upload_date'])) ?></p>
      </div>
    </article>
  </div>
</body>

</html>