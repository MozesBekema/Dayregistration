<?php session_start();
    include("inc/connect.php");
    include("inc/changes.php");

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
    }
    if(!isset($_SESSION['login_user'])){
        header("Location: index.php");
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
        <div class="progressContainer">
            <br/>
            <h1>Settings</h1>
            <p>Choose a start &amp; end date to start.</p><br/>
            <form action="" method="post">
                <input type="date" class="datePicker" name="startDate" value="Start date">
                <input type="date" class="datePicker" name="endDate" value="End date">
                <button type="submit" class="buttonRaisedMain" name="dateSubmit">Submit date</button>
            </form>

            <p>Choose a theme color:</p><br/>
            <form action="" method="post">
                <button class="purple" type="submit" name="purpleSubmit"></button>
                <button class="orange" type="submit" name="orangeSubmit"></button>
                <button class="red" type="submit" name="redSubmit"></button>
                <button class="blue" type="submit" name="blueSubmit"></button><br/>
                <button class="font" type="submit" name="serifSubmit">Sans Serif</button>
                <button class="font" type="submit" name="robotoSubmit">Roboto</button>
                <button class="font" type="submit" name="indieSubmit">Indie Flower</button>
            </form>
        </div>
    </body>

    </html>
