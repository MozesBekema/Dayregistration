<?php
    try{
        $conn = new PDO('mysql:host=db.joostdelange.nl;dbname=daenrjy158_dr',"daenrjy158_dr", "g7oVycQfH2");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "error: " , $e->getMessage();
    }
?>
