<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Notices - ATMABISWAS</title>
  <link rel="stylesheet" href="notice.css">
  <link rel="stylesheet" href="green.css">
</head>

<body>
  <?php include 'Navbar.php' ?>
  
  <div class="notice-container">
    <div class="notice-header">
      <h1>Notices & Announcements</h1>
    </div>

    <div class="search-bar">
      <input type="text" placeholder="Search notices...">
    </div>

    <div class="notice-filters">
      <button class="filter-btn active" data-category="all">All</button>
      <button class="filter-btn" data-category="Recruitment">Recruitment</button>
      <button class="filter-btn" data-category="Event">Event</button>
      <button class="filter-btn" data-category="Scholarship">Scholarship</button>
      <button class="filter-btn" data-category="Training">Training</button>
      <button class="filter-btn" data-category="General">General</button>
    </div>

    <div class="notice-grid">
      <?php
      require_once '../backend/Database/db_connect.php';
      
      $sql = "SELECT * FROM notices WHERE is_active = 1 ORDER BY created_at DESC";
      $result = $conn->query($sql);

      if ($result->num_rows > 0) {
        while($row = $result->fetch_assoc()) {
          $date = date('F j, Y', strtotime($row['created_at']));
          ?>
          <div class="notice-card" data-category="<?php echo htmlspecialchars($row['category']); ?>">
            <span class="notice-category"><?php echo htmlspecialchars($row['category']); ?></span>
            <div class="notice-date"><?php echo $date; ?></div>
            <h3 class="notice-title"><?php echo htmlspecialchars($row['title']); ?></h3>
            <p class="notice-description"><?php echo htmlspecialchars($row['description']); ?></p>
            <div class="notice-actions">
              <?php if ($row['pdf_file']) { ?>
                <a href="../backend/uploads/<?php echo htmlspecialchars($row['pdf_file']); ?>" 
                   class="notice-btn view-btn" target="_blank">View PDF</a>
                <a href="../backend/uploads/<?php echo htmlspecialchars($row['pdf_file']); ?>" 
                   class="notice-btn download-btn" download>Download</a>
              <?php } ?>
            </div>
          </div>
          <?php
        }
      } else {
        echo '<p style="text-align: center; grid-column: 1/-1;">No notices available at the moment.</p>';
      }
      $conn->close();
      ?>
    </div>
  </div>

  <?php include 'footer.php' ?>
  
  <script src="notice.js"></script>
</body>

</html>