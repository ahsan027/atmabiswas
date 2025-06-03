<?php
// blogUpload_process.php
header('Content-Type: application/json');

try {
  /* ---------- DB CONNECTION ---------- */
  $dbhost = 'localhost';
  $dbname = 'atmabiswas';
  $dbuser = 'root';
  $dbpass = '';

  $pdo = new PDO(
    "mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4",
    $dbuser,
    $dbpass,
    [PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION]
  );

  /* ---------- INPUT & SANITISATION ---------- */
  $title   = filter_input(INPUT_POST, 'blog_title', FILTER_SANITIZE_STRING);
  $content = $_POST['blog_content']    ?? '';
  $summary = $_POST['summary_content'] ?? '';

  // allow only a safe subset of tags
  $allowedTags = '<p><h1><h2><h3><blockquote><strong><em><u>'
    . '<a><ul><ol><li><span><font>';

  $cleanContent = strip_tags($content, $allowedTags);
  $cleanSummary = strip_tags($summary, $allowedTags);

  /* ---------- DATABASE INSERT ---------- */
  $stmt = $pdo->prepare("
        INSERT INTO blogs (blog_title, blog_content, summary)
        VALUES (:title, :content, :summary)
    ");

  $stmt->bindParam(':title',   $title,        PDO::PARAM_STR);
  $stmt->bindParam(':content', $cleanContent, PDO::PARAM_STR);
  $stmt->bindParam(':summary', $cleanSummary, PDO::PARAM_STR);


  /* ---------- RESPONSE ---------- */
  if ($stmt->execute()) {
    echo json_encode([
      'status'   => 'success',
      'message'  => 'Blog post saved successfully!',
      'post_id'  => $pdo->lastInsertId()
    ]);
  } else {
    echo json_encode([
      'status'  => 'error',
      'message' => 'Failed to save blog post'
    ]);
  }
} catch (PDOException $e) {
  error_log('Database Error: ' . $e->getMessage());
  echo json_encode([
    'status'  => 'error',
    'message' => 'Database error occurred',
    // remove next line in production
    'error'   => $e->getMessage()
  ]);
} catch (Exception $e) {
  error_log('General Error: ' . $e->getMessage());
  echo json_encode([
    'status'  => 'error',
    'message' => 'An error occurred',
    // remove next line in production
    'error'   => $e->getMessage()
  ]);
}