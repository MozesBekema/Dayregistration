<?php
    try{
        $conn = new PDO('mysql:host=db.joostdelange.nl;dbname=md401321db371933',"md401321db371933", "zdZ4ieuk");
        $conn->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    }
    catch(PDOException $e) {
        echo "error: " , $e->getMessage();
    }
?>
