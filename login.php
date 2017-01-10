<?php

    include("inc/connect.php");

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }

    if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){

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
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet"> </head>

    <body>
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
            <div class="wrapperLogin">
                <div class="containerLogin">
                    <form action="" method="POST">
                        <div class="group">
                            <input type="text" required> <span class="highlight"></span> <span class="bar"></span>
                            <label>Name</label>
                        </div>
                        <div class="group">
                            <input type="text" required> <span class="highlight"></span> <span class="bar"></span>
                            <label>Email</label>
                        </div>
                    </form>
                </div>
            </div>
            <?php
            }
            else {
              echo "<a href='login.php?action=logout'>Log uit</a>";
              header('Location: main.php');
            }
             ?> </body>

    </html>
