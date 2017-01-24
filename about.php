<?php session_start();
    include("inc/connect.php");
    include("inc/changes.php");

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }
    if(isset($_POST['dateSubmit'])){

        $startDate = $_POST['startDate'];
        $endDate = $_POST['endDate'];
        $dayReset = 0;

        $date = $conn->prepare("UPDATE `users` SET `startDate` = :start, `endDate` = :end, `days_worked` = :dayReset WHERE `username` = :username");
        $date->execute(array('start' => $startDate, 'end' => $endDate, 'username' => $username, 'dayReset' => $dayReset));
    }
?>

<!doctype>
    <html>
    <head>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/material.css">
        <link rel="stylesheet" href="css/progress.scss">
        <link href="img/icon.png" rel="icon">
        <meta name="theme-color" content="<?php echo $color?>">
        <script src="css/material.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        <title>Dayregistration | Settings</title>
    </head>
    <body class="mainBackground">
        <div class="<?php if(isset($_SESSION['login_user'])){ echo "menuBar";} else { echo "menuBarIndex"; }?>">
            <div class="logo">
                <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon"> <i class="material-icons">more_vert</i> </button>
            </div>
            <a href="index.php">
                <p class="dayRegistration">Day Registration</p>
            </a>
            <a href="login.php?action=logout">
                <button class="buttonRaised">LOGOUT</button>
            </a>
            <a href="main.php">
                <button class="buttonRaised">PROFILE</button>
            </a>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                <a href="login.php?action=logout">
                    <li class="mdl-menu__item">LOGOUT</li>
                </a>
                <a href="main.php">
                    <li class="mdl-menu__item">PROFILE</li>
                </a>
            </ul>
        </div>
        <div class="aboutContainer">
            <br/>
            <h1>About</h1>
            <p>This website is a student project made by <a href="http://thomasbekema.nl" target="_blank">Thomas Bekema</a> &amp; <a href="http://joostdelange.nl" target="_blank">Joost de Lange</a>. We are about to go on an internship and we thought this is a great solution to track how many days we are into our internship.</a></p><br/>
            <p>The hosting of dayregistration.nl is made posible by <a href="http://rebelcore.nl" target="_blank">Daen Rebel</a></p><br/>
            <p>Thanks for using our site, We really enjoyed working on it and there will be updates with great new features very soon!</p>
        </div>
    </body>

    </html>
