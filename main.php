<?php
    include("inc/connect.php");
    include("inc/random.php");

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
            session_destroy();
            header("Location: index.php");
    }
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
        <div class="addDay">
            <button class="addButton">+</button>
        </div>
    </body>

    </html>
