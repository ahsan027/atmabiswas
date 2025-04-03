<?php
    include '../Database/db.php';
    
    $db= new Db();

    $connection = $db->connect();

    if(isset($_GET['id']) && isset($_GET['deptCode'])){
        try{
            $job_id = htmlspecialchars($_GET['id']);

            $sql ="DELETE FROM jobs WHERE job_id = :job_id";

            $stmt = $connection->prepare($sql);

            $stmt->bindParam(":job_id",$job_id);

            $stmt->execute();

            header("Location: updatejobs.php");

        }catch(PDOException $err){
            
            echo $err;
        }


    }

?>