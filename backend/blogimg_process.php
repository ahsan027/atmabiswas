<?php

include 'Database/db.php';

$db = new Db();
$connection = $db->connect();

$uploadDir = "../uploads/blog_imgs/";

$allowedTypes = ['image/jpg', 'image/jpeg', 'image/png'];
$imageSize = 2 * 1024 * 1024;


if (!file_exists($uploadDir)) {

  mkdir($uploadDir, 0755, true);
}

function processFile($imageFile, $allowedTypes, $imageSize, $uploadDir)
{

  $fileType = new finfo(FILEINFO_MIME_TYPE);
  $mimeType = $fileType->file($imageFile['tmp_name']);

  if ($imageFile['error'] !== UPLOAD_ERR_OK) {
    echo "<p>Uploading Ran into an Error!</p>";
    exit();
  }

  if ($imageFile['size'] > $imageSize) {
    echo "<p>File is too Large!</p>";
    exit();
  }

  if (!in_array($mimeType, $allowedTypes)) {
    echo "<p>Not the Correct File Format</p>";
    exit();
  }

  $ext = pathinfo($imageFile['name'], PATHINFO_EXTENSION);
  $date = date("Y-m-d");
  $new = "PHOTO_" . explode(" ", $_POST['img_title'])[0] . $date . "_" . random_int(1, 1000) . "." . $ext;

  $target = $uploadDir . $new;

  if (!move_uploaded_file($imageFile['tmp_name'], $target)) {
    echo "<p>Failed to Move Uploaded Image!</p>";
    exit();
  }
  return $target;
}

if ($_SERVER["REQUEST_METHOD"] === "POST") {

  try {
    $coverid = htmlspecialchars($_GET['id']);

    $imageFile = $_FILES["image_file"];

    $image_path = processFile($imageFile, $allowedTypes, $imageSize, $uploadDir);

    $sql = "UPDATE blogs SET cover_img=:img_path WHERE blog_id=$coverid";

    $stmt = $connection->prepare($sql);

    $stmt->bindParam(":img_path", $image_path);

    if ($stmt->execute()) {

      $source = filter_var($_POST['blog_source'], FILTER_SANITIZE_URL);

      if (filter_var($source, FILTER_VALIDATE_URL)) {

        $sourceSql = "UPDATE blogs SET source_link=:blog_source WHERE blog_id=$coverid";


        $sourceStmt = $connection->prepare($sourceSql);

        if ($sourceStmt->execute()) {

          header("Location: DashBoard/success.php?type=upload");
          exit();
        } else {
          header("Location: DashBoard/error.php?type=upload");
          exit();
        }
      }
    }
  } catch (Exception $e) {

    header("Location: DashBoard/error.php?type=upload");

    exit();
  }
}
