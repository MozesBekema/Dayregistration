<?php

    include("inc/connect.php");

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


?>
    <!DOCTYPE html>
    <html lang="en">
    <head>
        <title>Dayregistration</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"> </head>
    <body style="background-color:rgba(173,204,200,1);">
        <div class="menuBar">
            <a href="index.php">
                <div class="logo"></div>
                <p class="dayRegistration">Day Registration</p>
            </a>
            <a href="index.php">
                <button class="buttonRaised">BACK</button>
            </a>
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
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Name</label>
                        </div>
                        <div class="group">
                            <input type="password" required name="password">
                            <span class="highlight"></span>
                            <span class="bar"></span>
                            <label>Password</label>
                        </div>
                        <button type="submit" name="submitLogin" class="buttonRaised buttonRaisedLogin">LOGIN</button>
                    </form>
                </div>
            </div>
        </div>
        <div class="headerBackgroundGradient">
<div id="clouds">
	<div class="cloud x1"></div>
	<!-- Time for multiple clouds to dance around -->
	<div class="cloud x2"></div>
	<div class="cloud x3"></div>
	<div class="cloud x4"></div>
	<div class="cloud x5"></div>
</div>
<!-- Thats the markup! -->
<!-- That looks cool. We are done!! -->
        </div>
        <?php
            }
            else {
                header('Location: main.php');
            }
        ?>
    </body>

    </html>
