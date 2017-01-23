<?php
    try{
        $conn = new PDO('mysql:host=10.3.1.108;dbname=daenrjy158_dr',"daenrjy158_dr", "g7oVycQfH2");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "error: " , $e->getMessage();
    }
?>
