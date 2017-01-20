<?php session_start();
    include("inc/connect.php");
    include("inc/changes.php");

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }
?>

<!doctype html>
<html>
    <head>
        <title>Dayregistration | Index</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/css?family=Indie+Flower" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/material.css">
        <script src="css/material.js"></script>
        <link href="img/logo.png" rel="icon">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    </head>
    <body>
        <div class="<?php if(isset($_SESSION['login_user'])){ echo "menuBar";} else { echo "menuBarIndex"; }?>">
            <div class="logo">
                <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>
            </div>
            <a href="index.php">
                <p class="dayRegistration">Day Registration</p>
            </a>
            <?php
                if(!isset($_SESSION['login_user'])){
            ?>
            <a href="login.php">
                <button class="buttonRaised">LOGIN</button>
            </a>
            <?php
                }
                else {
            ?>
            <a href="index.php?action=logout">
                <button class="buttonRaised">LOGOUT</button>
            </a>
            <?php
                }
                if(!isset($_SESSION['login_user'])){
            ?>
            <a href="register.php">
                <button class="buttonRaised">REGISTER</button>
            </a>
            <?php
                }
                else {
            ?>
            <a href="main.php">
                <button class="buttonRaised">PROFILE</button>
            </a>
            <?php
                }
            ?>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                <?php
                    if(!isset($_SESSION['login_user'])){
                ?>
                <a href="login.php">
                    <li class="mdl-menu__item">LOGIN</li>
                </a>
                <?php
                    }
                    else {
                ?>
                <a href="index.php?action=logout">
                    <li class="mdl-menu__item">LOGOUT</li>
                </a>
                <?php
                    }
                    if(!isset($_SESSION['login_user'])){
                ?>
                <a href="register.php">
                    <li class="mdl-menu__item">REGISTER</li>
                </a>
                <?php
                    }
                    else {
                ?>
                <a href="main.php">
                    <li class="mdl-menu__item">PROFILE</li>
                </a>
                <?php
                    }
                ?>
            </ul>
        </div>
        <div class="headerBackground">
            <div class="materialCalendar shadow shadowBox">
                <div class="topRowCalendar">
                    <div class="wrapper">
                        <div class="holes"></div>
                    </div>
                    <div class="wrapper">
                        <div class="holes"></div>
                    </div>
                    <div class="wrapper">
                        <div class="holes"></div>
                    </div>
                </div>
                <div class="selectionsCalendar">
                    <i class="material-icons">&#xE5CA;</i></a>
                    <div class="lineLong"></div>
                    <div class="lineShort"></div>
                </div>
                <div class="selectionsCalendar">
                    <i class="material-icons">&#xE5CA;</i>
                    <div class="lineLong"></div>
                    <div class="lineShort"></div>
                </div>
                <div class="selectionsCalendar">
                    <i class="material-icons">&#xE5CA;</i>
                    <div class="lineLong"></div>
                    <div class="lineShort"></div>
                </div>
            </div>
        </div>
        <div class="headerBackgroundLighter">
            <div class="wrapperHeader">
                <div class="container">
                    <div class="<?php if(isset($_SESSION['login_user'])){ echo "fabButton";} else { echo "fabButtonIndex"; }?>">
                        <a href="register.php"><i class="material-icons">access_time</i></a>
                    </div>
                    <h1>Safe time</h1>
                    <p>Don’t worry about the amount days you’ve worked.</p>
                </div>
            </div>
            <div class="wrapperHeader">
                <div class="container">
                    <div class="<?php if(isset($_SESSION['login_user'])){ echo "fabButton";} else { echo "fabButtonIndex"; }?>">
                        <a href="register.php"><i class="material-icons">phone_iphone</i></a>
                    </div>
                    <h1>On the go?</h1>
                    <p>Day Registration is a fully functional web application that is user friendly on all devices.</p>
                </div>
            </div>
            <div class="wrapperHeader">
                <div class="container">
                    <div class="<?php if(isset($_SESSION['login_user'])){ echo "fabButton";} else { echo "fabButtonIndex"; }?>">
                        <a href="register.php"><i class="material-icons">brush</i></a>
                    </div>
                    <h1>Customize</h1>
                    <p>We think the material design is already very beautiful but you can customize a lot to your own taste if you like.</p>
                </div>
            </div>
        </div>
        <div class="headerBackgroundLighterNoshadow">
            <div class="containerBottom">
                <div class="getStartedDraw">
                    <div class="orangeFirstHalf">
                        <div class="clock">
                            <div class="pointerTall"></div>
                            <div class="pointerSmall"></div>
                        </div>
                    </div>
                    <div class="orangeSecondHalf">
                        <div class="timer"></div>
                        <div class="timerTop"></div>
                        <div class="timerLeft"></div>
                        <div class="timerRight"></div>
                        <div class="calendar">
                            <div class="calendarLighter">
                                <p>
                                    <?php
                                        $date = date("M d");
                                        echo $date;
                                    ?>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="getStarted">
                    <a href="register.php">
                        <button>GET STARTED</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
