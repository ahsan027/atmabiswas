<?php
// index.php
try {
  $pdo = new PDO("mysql:host=localhost;dbname=atmabiswas;charset=utf8mb4", 'root', '');
  $stmt = $pdo->query("SELECT blog_id, blog_title, upload_date FROM blogs ORDER BY upload_date DESC");
  $posts = $stmt->fetchAll(PDO::FETCH_ASSOC);
} catch (PDOException $e) {
  die("Database error: " . $e->getMessage());
}
?>
<!DOCTYPE html>
<html>

<head>
  <title>Blog Posts</title>
</head>

<body>
  <div class="blog-list">
    <?php foreach ($posts as $post): ?>
      <article class="post-preview">
        <h2>
          <a href="blog_content.php?id=<?= $post['blog_id'] ?>">
            <?= htmlspecialchars($post['blog_title']) ?>
          </a>
        </h2>
        <time><?= date('M j, Y', strtotime($post['upload_date'])) ?></time>
      </article>
    <?php endforeach; ?>
  </div>
</body>

</html>