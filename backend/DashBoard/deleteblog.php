<?php
include '../Database/db.php';

$db = new Db();
$conn = $db->connect();

try {

  $sql = "DELETE FROM blogs WHERE blog_id=:blog_id";

  $stmt = $conn->prepare($sql);

  $stmt->bindParam(":blog_id", $_GET['blog_id']);

  $stmt->execute();
  header("Location: dashboard.php");
} catch (PDOException $e) {
  echo $e;
}
