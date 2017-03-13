<?php
    try{
        $conn = new PDO('mysql:host=localhost;dbname=dr',"root", "");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "error: " , $e->getMessage();
    }
?>
