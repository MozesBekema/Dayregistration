<!doctype html>
<html>
    <head>
        <title>Dayregistration</title>
        <link href="css/styles.css" rel="stylesheet" type="text/css">
        <link href="https://fonts.googleapis.com/css?family=Roboto:300,500" rel="stylesheet">
        <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
        <link rel="stylesheet" href="css/material.css">
        <script src="css/material.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
    </head>
    <body>
        <div class="menuBar">
            <div class="logo">
                <button id="demo-menu-lower-left" class="mdl-button mdl-js-button mdl-button--icon">
                    <i class="material-icons">more_vert</i>
                </button>
            </div>
            <a href="index.php">
                <p class="dayRegistration">Day Registration</p>
            </a>
            <a href="login.php">
                <button class="buttonRaised">LOGIN</button>
            </a>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                <a href="login.php"><li class="mdl-menu__item">LOGIN</li></a>
                <a href="register.php"><li class="mdl-menu__item">REGISTER</li></a>
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
                    <i class="material-icons">check</i>
                    <div class="lineLong"></div>
                    <div class="lineShort"></div>
                </div>
                <div class="selectionsCalendar">
                    <i class="material-icons">check</i>
                    <div class="lineLong"></div>
                    <div class="lineShort"></div>
                </div>
                <div class="selectionsCalendar">
                    <i class="material-icons">check</i>
                    <div class="lineLong"></div>
                    <div class="lineShort"></div>
                </div>
            </div>
        </div>
        <div class="headerBackgroundLighter">
            <div class="wrapperHeader">
                <div class="container">
                    <div class="fabButton">
                        <i class="material-icons">access_time</i>
                    </div>
                    <h1>Safe time</h1>
                    <p>Don’t worry about the hours you’ve worked, set the time registration on automatic and make adjustments later on.</p>
                </div>
            </div>
            <div class="wrapperHeader">
                <div class="container">
                    <div class="fabButton">
                        <i class="material-icons">phone_iphone</i>
                    </div>
                    <h1>On the go?</h1>
                    <p>Day Registration is a fully functional web application that is user friendly on all devices.</p>
                </div>
            </div>
            <div class="wrapperHeader">
                <div class="container">
                    <div class="fabButton">
                        <i class="material-icons">brush</i>
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
                        <div class="digitalClock">
                            <div class="digitalClockLighter">
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
                    <a href="inc/registratie.php">
                        <button>GET STARTED</button>
                    </a>
                </div>
            </div>
        </div>
    </body>
</html>
