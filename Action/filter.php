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
echo '
<div class="table-container">
    <table>
        <thead>
            <tr>
                <th>Date</th>
                <th>Order ID</th>
                <th>Name</th>
                <th>Price</th>
                <th>Quantity</th>
                <th>Total</th>
            </tr>
        </thead>
        <tbody id="table-body">
        
        </tbody>
    </table>
</div>';

        }
    } else {
        echo "<p>No results found for the selected division.</p>";
    }
}
