<?php
    if(isset($_SESSION['login_user'])){}
    else {
        header('Location: index.php');
    }
?>
