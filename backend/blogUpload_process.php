<?php
// blogUpload_process.php
header('Content-Type: application/json');

try {
  // Database connection
  $dbhost = 'localhost';
  $dbname = 'atmabiswas';
  $dbuser = 'root';
  $dbpass = '';

  $pdo = new PDO("mysql:host=$dbhost;dbname=$dbname;charset=utf8mb4", $dbuser, $dbpass);
  $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);


  $title = filter_input(INPUT_POST, 'blog_title', FILTER_SANITIZE_STRING);
  $content = $_POST['blog_content'] ?? '';


  $cleanContent = strip_tags($content, [
    'p',
    'h1',
    'h2',
    'h3',
    'blockquote',
    'strong',
    'em',
    'u',
    'a',
    'ul',
    'ol',
    'li',
    'span',
    'font'
  ]);


  $stmt = $pdo->prepare("
        INSERT INTO blogs 
        (blog_title, blog_content) 
        VALUES (:title, :content)
    ");

  // Bind parameters
  $stmt->bindParam(':title', $title, PDO::PARAM_STR);
  $stmt->bindParam(':content', $cleanContent, PDO::PARAM_STR);

  // Execute and respond
  if ($stmt->execute()) {
    echo json_encode([
      'status' => 'success',
      'message' => 'Blog post saved successfully!',
      'post_id' => $pdo->lastInsertId()
    ]);
  } else {
    echo json_encode([
      'status' => 'error',
      'message' => 'Failed to save blog post'
    ]);
  }
} catch (PDOException $e) {
  error_log("Database Error: " . $e->getMessage());
  echo json_encode([
    'status' => 'error',
    'message' => 'Database error occurred',
    'error' => $e->getMessage() // Remove in production
  ]);
} catch (Exception $e) {
  error_log("General Error: " . $e->getMessage());
  echo json_encode([
    'status' => 'error',
    'message' => 'An error occurred',
    'error' => $e->getMessage() // Remove in production
  ]);
}
