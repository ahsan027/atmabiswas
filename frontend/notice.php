<?php
include '../backend/Database/db.php';

$database = new Db();

$conn = $database->connect();

$sql = "SELECT * FROM pdsfiles";

$stmt = $conn->prepare($sql);

$stmt->execute();

$pdfs = $stmt->fetchAll(PDO::FETCH_ASSOC);

?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>ATMABISWAS - Notice</title>
    <link rel="stylesheet" href="notice.css">
</head>

<body>
    <?php include 'Navbar.php' ?>
    <header>
        <h1>Notice Board – ATMABISWAS</h1>
        <p>Showcasing our work through national and regional media—covering our impact, initiatives, and stories
            that inspire social transformation.
        </p>
    </header>

    <div class="container">
        <div class="grid">
            <?php foreach ($pdfs as $pdf):; ?>

                <a href="<?php echo $pdf["pdf_path"]; ?>" target="_blank" class="card-link">
                    <embed class="card-embed" src="<?php echo $pdf["pdf_path"]; ?>"></embed>
                    <div class="card-footer">
                        <h2>Document 3</h2>
                    </div>
                </a>
            <?php endforeach; ?>

        </div>
    </div>
    <?php include 'footer.php' ?>

</body>

</html>