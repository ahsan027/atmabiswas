<?php

// print_r($_POST['division']);
if ($_SERVER['REQUEST_METHOD'] === 'POST' && isset($_POST['division'])) {
    header("Content-Type: application/json");
    $division = $_POST['division'];

    function getResult($conn, $division) {
        $query = "SELECT * FROM branch WHERE division = :division ORDER BY dist ASC";
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

    if ($result) {
        echo json_encode($result);

    } else {
        echo "<p>No results found for the selected division.</p>";
    }
}
