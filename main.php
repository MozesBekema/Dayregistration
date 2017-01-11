<?php
include("inc/connect.php");
if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }
echo"hallo wereld";
echo "<a href='login.php?action=logout'>Log uit</a>";
