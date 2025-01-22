<?php

// print_r($_POST['division']);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['division'])) {
    $division = $_POST['division'];

    function getResult($conn, $division) {
        $query = "SELECT DISTINCT dist FROM branch WHERE division = :division";
        $stmt = $conn->prepare($query);
        $stmt->bindParam(":division", $division);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        return $result;
    }

    include '../Database/db.php';
    $db = new Db();
    $conn = $db->connect();
    $result = getResult($conn, $division);
    // print_r($result);


    if ($result) {
        foreach ($result as $row) {
            echo "<button>" . htmlspecialchars($row['dist']) . "</button>";
        }
    } else {
        echo "<p>No results found for the selected division.</p>";
    }
}
