<?php session_start();

include("inc/connect.php");
include("inc/changes.php");

if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }

if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){

    $roles_id = 2;
    $user_color = '#ff5722';
    $user_font = '"Roboto", sans-serif;';

    $username = filter_var($_POST['username'], FILTER_SANITIZE_STRING);
    $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);

    $query = $conn->prepare("INSERT INTO `users`(username, password, roles_id, user_color, user_font) VALUES(:username, :password, :roles_id, :user_color, :user_font)");

    $query->execute(array('username' => $username, 'password' => $password, 'roles_id' => $roles_id, 'user_color' => $user_color, 'user_font' => $user_font));

    if($query){
        header('Location: login.php');
    }else{
       echo "foutje";
    }
}
if(!isset($_SESSION['login_user'])){}
    else {
        header("Location: main.php");
    }

?>
    <!doctype>
    <html lang="en">

    <head>
        <title>Dayregistration | Registration</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/material.css">
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
            <a href="login.php">
                <button class="buttonRaised">BACK</button>
            </a>
            <a href="login.php">
                <button class="buttonRaised">LOGIN</button>
            </a>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                <a href="index.php">
                    <li class="mdl-menu__item">BACK</li>
                </a>
                <a href="login.php">
                <button class="buttonRaised">LOGIN</button>
            </a>
            </ul>
        </div>
        <div class="headerBackgroundLogin">
            <div class="wrapperLogin">
                <div class="containerLogin">
                    <h1>Register</h1>
                    <form action="" method="POST">
                        <div class="group">
                            <input type="text" id="txt_username" required name="username" autofocus>
                            <span class="bar"></span>
                            <label for="txt_username">Username</label>
                        </div>
                        <div class="group">
                            <input type="password" id="txt_password" required name="password">
                            <span class="bar"></span>
                            <label for="txt_password">Password</label>
                        </div>
                        <button type="submit" name="submit" class="buttonRaisedLogin">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="headerBackgroundGradient">
            <div id="clouds">
                <div class="cloud x1"></div>
                <div class="cloud x2"></div>
                <div class="cloud x3"></div>
                <div class="cloud x4"></div>
                <div class="cloud x5"></div>
            </div>
        </div>
    </body>
</html>
