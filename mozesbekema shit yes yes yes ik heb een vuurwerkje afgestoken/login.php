<?php
     
    include("connect.php");
    session_start();

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }

    if(isset($_POST['submit']) && isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])){
         
        $gebruikersnaam = $_POST['gebruikersnaam'];
        $wachtwoord = $_POST['wachtwoord'];
        
        $gebruikersnaam = filter_var($gebruikersnaam, FILTER_SANITIZE_STRING);
        $wachtwoord = filter_var($wachtwoord, FILTER_SANITIZE_STRING);
        
    
        $query = $conn->prepare("SELECT COUNT(`id`) FROM `gebruikers` WHERE `gebruikersnaam`= :gebruikersnaam AND `wachtwoord` = :wachtwoord");
        $query->execute(array('gebruikersnaam'=>$gebruikersnaam, 'wachtwoord'=>$wachtwoord));
        
        $count = $query->fetchColumn();
        if($count == "1"){
            $_SESSION['login_user'] = $gebruikersnaam;
        }else{
            echo"Verkeerde gebruikersnaam/wachtwoord";
        }
    }

    
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login pagina</title>
    </head>

    <body>
        <?php
         if(!isset($_SESSION['login_user'])){
             
         
        ?>
        <form action="" method="POST">
            <input type="text" name="gebruikersnaam" placeholder="Je gebruikersnaam">
            <input type="password" name="wachtwoord" placeholder="Je wachtwoord">
            <input type="submit" name="submit" value="Login"> 
        </form>
        <?php
         }else{
             echo "Je bent ingelogd";
             echo "<a href='login.php?action=logout'>Log uit</a>";
         }
             ?>
    </body>

    </html>