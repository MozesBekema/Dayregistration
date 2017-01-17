<?php
    include("inc/connect.php");
    include("inc/random.php");

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
            session_destroy();
            header("Location: index.php");
    }



$stageDays = 365;
$username = $_SESSION['login_user'];

if(isset($_POST['addButton'])){

      $daysAdd = $conn->prepare("UPDATE `users` SET `days_worked`= `days_worked` + 1 WHERE`username` =  :username");
      $daysAdd->execute(array('username'=>$username));
}

if(isset($_POST['minusButton'])){

      $daysRemove = $conn->prepare("UPDATE `users` SET `days_worked`= `days_worked` - 1 WHERE`username` =  :username");
      $daysRemove->execute(array('username'=>$username));
}


$days = $conn->prepare("SELECT `days_worked` FROM `users` WHERE `username` = :username");
$days->execute(array('username'=>$username));

?>
    <!doctype>
    <html>

    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/material.css">
        <link rel="stylesheet" href="css/progress.scss">
        <script src="css/material.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"> </head>
    <script>

    </script>

    <body class="mainBackground">
        <div class="menuBar">
            <div class="logo">
                <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">more_vert</i> </button>
            </div>
            <a href="index.php">
                <p class="dayRegistration">Day Registration</p>
            </a>
            <a href="login.php?action=logout">
                <button class="buttonRaised">LOGOUT</button>
            </a>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                <a href="login.php?action=logout">
                    <li class="mdl-menu__item">LOGOUT</li>
                </a>
            </ul>
        </div>
        <div class="add">
            <form method="post" action="">
                <button class="addButton" name="addButton" type="submit">+</button>
                <button class="minusButton" name="minusButton" type="submit" >-</button>
            </form>
        </div>
        <?php
         foreach($days as $row){
        ?>
        <div id="progress">
            <div class="progressResult">
                 <?php
                    $percentage = $row['days_worked'] / $stageDays * 100;
                    echo $percentage . "%" ;
                ?>
            </div>
            <div class="progressCurrent">
                 <?php
                    echo $row['days_worked'];
                ?>
            </div>
            <div class="progressDays">
                 <?php
                    $daysLeft = $stageDays  -  $row['days_worked'] ;
                    echo $daysLeft;
                ?>
            </div>
        </div>
        <?php
         }
        ?>


    </body>

    </html>
