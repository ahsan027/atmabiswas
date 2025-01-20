<?php
include '../Database/db.php';

$db = new Db();
$conn = $db->connect();

try{
    $division = $_POST['divison'];
    $query = "SELECT DISTINCT dist FROM branch WHERE division=:division";
    $stmt = $conn->prepare($query);
    $stmt->bindParam(":division",$division);
    $stmt->execute();

    $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    var_dump($conn);
    var_dump($division);

    var_dump($result);

    echo "ConnectionSuccessful";

}catch(PDOException $e){
    print_r($e);
}

?>