<?php

include("connect.php");

if(isset($_POST['submit']) && isset($_POST['gebruikersnaam']) && isset($_POST['wachtwoord'])){
    
    $gebruikersnaam = $_POST['gebruikersnaam'];
    $wachtwoord = $_POST['wachtwoord'];
    $rollen_id = 2;
    
    $geruikersnaam = filter_var($gebruikersnaam, FILTER_SANITIZE_STRING);
    $wachtwoord = filter_var($wachtwoord, FILTER_SANITIZE_STRING);
    
    $query = $conn->prepare("INSERT INTO `gebruikers`(gebruikersnaam, wachtwoord, rollen_id) VALUES(:gebruikersnaam, :wachtwoord, :rollen_id)");
    
    $query->execute(array('gebruikersnaam' => $gebruikersnaam, 'wachtwoord' => $wachtwoord, 'rollen_id' => $rollen_id));
    
    if($query){
        echo "gelukt";
    }else{
       echo "foutje"; 
    }
}

?>
    <!doctype>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Registreer</title>
    </head>

    <body>
        <form action="" method="POST">
            <label for="txt_gebruikersnaam">Gebruikersnaam</label>
            <input type="text" id="txt_gebruikersnaam" name="gebruikersnaam" placeholder="Een gebruikersnaam">
            <br/>
            <label for="txt_wachtwoord">wachtwoord</label>
            <input type="text" id="txt_wachtwoord" name="wachtwoord" placeholder="Een wachtwoord"> 
            <br/>
            <input type="submit" name="submit" value="Registreren">
            </form>
        </body>

    </html>