<?php session_start();

    include("inc/connect.php");
    include("inc/changes.php");

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }

    if(isset($_POST['submitLogin']) && isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = filter_var($username, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);


        $query = $conn->prepare("SELECT COUNT(`id`) FROM `users` WHERE `username`= :username AND `password` = :password");
        $query->execute(array('username'=>$username, 'password'=>$password));

        $count = $query->fetchColumn();
        if($count == "1"){
            $_SESSION['login_user'] = $username;
        }else{
            echo"Wrong username or password";
        }
    }
    if(!isset($_SESSION['login_user'])){}
    else {
        header("Location: main.php");
    }


?>
    <!DOCTYPE html>
    <html lang="en">
        <head>
            <title>Dayregistration | Login</title>
            <link href="css/styles.css" rel="stylesheet" type="text/css">
            <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
            <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
            <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
            <link rel="stylesheet" href="css/material.css">
            <link href="img/icon.png" rel="icon">
            <meta name="theme-color" content="#ff5722">
            <script src="css/material.js"></script>
            <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        </head>
        <body class="logRegBackground">
            <div class="menuBarIndex">
                <div class="logo">
                    <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
                        <i class="material-icons">more_vert</i>
                    </button>
                </div>
                <a href="index.php">
                    <p class="dayRegistration">Day Registration</p>
                </a>
                <a href="index.php">
                    <button class="buttonRaised">BACK</button>
                </a>
                <a href="register.php">
                    <button class="buttonRaised">REGISTER</button>
                </a>
                <a href="about.php">
                    <button class="buttonRaised">ABOUT</button>
                </a>
                <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                    <a href="index.php">
                        <li class="mdl-menu__item">BACK</li>
                    </a>
                    <a href="register.php">
                        <li class="mdl-menu__item">REGISTER</li>
                    </a>
                    <a href="about.php">
                        <li class="mdl-menu__item">ABOUT</li>
                    </a>
                </ul>
            </div>
            <?php
                if(!isset($_SESSION['login_user'])){
            ?>
            <div class="headerBackgroundLogin">
                <div class="wrapperLogin">
                    <div class="containerLogin">
                        <h1>Login</h1>
                        <form action="" method="POST">
                            <div class="group">
                                <input type="text" required name="username" autofocus>
                                <span class="bar"></span>
                                <label>Name</label>
                            </div>
                            <div class="group">
                                <input type="password" required name="password">
                                <span class="bar"></span>
                                <label>Password</label>
                            </div>
                            <button type="submit" name="submitLogin" class="buttonRaisedLogin">LOGIN</button>
                        </form>
                    </div>
                </div>
            </div>
            <div class="headerBackgroundGradient">
                <div id="clouds">
                    <a href="http://joostdelange.nl" target="_blank"><div class="cloud x1"></div></a>
                    <div class="cloud x2"></div>
                    <div class="cloud x3"></div>
                    <a href="http://thomasbekema.nl" target="_blank"><div class="cloud x4"></div></a>
                    <div class="cloud x5"></div>
                </div>
            </div>
            <?php
                }
                else {
                    header('Location: main.php');
                }
            ?>
        </body>

    </html>
