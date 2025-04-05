<?php 


    include 'Database/db.php';

    $db = new Db();
    $conn = $db->connect();

    $pdf_title = htmlspecialchars($_POST["pdf_title"]);
    print_r($pdf_title);


    function processPdf($pdfFile,$maxSize,$allowedTypes,$uploadDir){
        
        $fileInfo = new finfo(FILEINFO_MIME_TYPE);
        $mimetype = $fileInfo->file($pdfFile["tmp_name"]);
        
        if($pdfFile["error"]!==UPLOAD_ERR_OK){
            echo "<p>An Error Occurd!</p>";
            exit();
        }

        if(!in_array($mimetype,$allowedTypes)){
            echo "<p>Invalid File Type</p>";
            exit();
        }

        if($pdfFile['size']>$maxSize){
            echo "<p>File size is too Large</p>";
            exit();
        }

        $ext = pathinfo($pdfFile["name"],PATHINFO_EXTENSION);

        $newFileName = "Notice_".random_int(0,100)."_".date("Y-m-d").".".$ext;

        $target = $uploadDir.$newFileName ;

        if(!move_uploaded_file($pdfFile["tmp_name"],$target)){
            echo "<p>Error Occurd While Uploading</p>";
            exit();
        }

        return $target;
    }

    if($_SERVER["REQUEST_METHOD"]==="POST"){
        try{

            $maxSize = 10*1024*1024;
            $allowedTypes = ["application/pdf"];
            $uploadDir = "../uploads/pdfs/";

            print_r($_FILES["pdf_file"]);
            $pdfFile = $_FILES["pdf_file"];

            $pdfPath = processPdf($pdfFile,$maxSize,$allowedTypes,$uploadDir);

            if(!file_exists($uploadDir)){
                mkdir($uploadDir,0755,true);
            }

            $sql = "INSERT INTO pdsFiles (pdf_title,pdf_path) VALUES (:pdf_title,:pdf_path)";
            $stmt = $conn->prepare($sql);

            $stmt->bindParam(":pdf_title",$pdf_title);
            $stmt->bindParam(":pdf_path",$pdfPath);


            $stmt->execute();

        }catch(PDOException $e){
            echo $e;
        }
    }
?>