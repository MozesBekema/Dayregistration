<?php session_start();
    include("inc/connect.php");
    include("inc/changes.php");

if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
}

$username = $_SESSION['login_user'];

if(isset($_POST['addButton'])){

      $daysAdd = $conn->prepare("UPDATE `users` SET `days_worked`= `days_worked` + 1 WHERE`username` =  :username");
      $daysAdd->execute(array('username'=>$username));
}
if(isset($_SESSION['login_user'])){}
    else {
        header("Location: index.php");
    }
if(isset($_POST['minusButton'])){

      $daysRemove = $conn->prepare("UPDATE `users` SET `days_worked`= `days_worked` - 1 WHERE`username` =  :username");
      $daysRemove->execute(array('username'=>$username));
}

$days = $conn->prepare("SELECT `days_worked` FROM `users` WHERE `username` = :username");
$days->execute(array('username'=>$username));


$date = $conn->prepare("SELECT `startDate`, `endDate` FROM `users` WHERE `username` = :username");
$date->execute(array('username' => $username));

foreach($date as $row){
    $startTimeStamp = strtotime($row['startDate']);
    $endTimeStamp = strtotime($row['endDate']);

    $timeDiff = abs($endTimeStamp - $startTimeStamp);

    $stageDays = $timeDiff/86400;  // 86400 seconds in one day


    $stageDays = intval($stageDays) ;

}
if($stageDays == 0){
    header("Location:settings.php");
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
        <link href="img/logo.png" rel="icon">
        <meta name="theme-color" content="#ff5722">
        <script src="css/material.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0">
        <title>Dayregistration | Progress</title>
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
            <a href="settings.php">
                <button class="buttonRaised">SETTINGS</button>
            </a>
            <ul class="mdl-menu mdl-menu--bottom-left mdl-js-menu mdl-js-ripple-effect" for="demo-menu-lower-left">
                <a href="login.php?action=logout">
                    <li class="mdl-menu__item">LOGOUT</li>
                </a>
                <a href="settings.php">
                    <li class="mdl-menu__item">SETTINGS</li>
                </a>
            </ul>
        </div>
        <div class="progressContainer">
            <br/>
            <h1>Progress</h1>
            <div class="add">
                <form method="post" action="">
                    <button class="minusButton" name="minusButton" type="submit" ><i class="material-icons">exposure_neg_1</i></button>
                    <button class="addButton" name="addButton" type="submit"><i class="material-icons">exposure_plus_1</i></button>
                </form>
            </div>
            <?php
             foreach($days as $row){
                 if($row['days_worked'] <= 0){
                    ?>
                    <style>
                        .minusButton {
                            display: none;
                        }
                    </style>
                    <?php
                        $reset = 0;

                        $dayReset = $conn->prepare("UPDATE `users` SET `days_worked` = :daysReset WHERE `username` = :username");
                        $dayReset->execute(array('username' => $username, 'daysReset' => $reset));
                }
            ?>
            <div id="progress">
                <div class="progressResult">
                    <?php
                        $percentage = $row['days_worked'] / $stageDays * 100;
                        if($percentage >= 100){
                    ?>
                    <style>
                        .addButton {
                            display: none;
                        }
                    </style>
                    <?php
                        echo "<p class='congrats'>Congrats! You finished your project.</p><p class='congrats'> Go to the <a href='settings.php'>Settings</a> to set new dates</p><br/>";
                    }
                    ?>
                    <p>
                        <?php
                            echo number_format((float)$percentage, 2, '.', '') . "%";
                        ?>
                    </p>
                    <div class="progress">
                        <div class="determinate" style="width: <?php echo number_format((float)$percentage, 2, '.', ''); ?>%"></div>
                    </div>
                </div>
                <div class="progressCurrent">
                    <p>
                        <?php
                            echo "You worked " . $row['days_worked'] . " days!";
                        ?>
                    </p>
                    <div class="progress">
                        <div class="determinate" style="width: <?php echo number_format((float)$percentage, 2, '.', ''); ?>%"></div>
                    </div>
                </div>
                <div class="progressDays">
                     <?php
                        $daysLeft = $stageDays  -  $row['days_worked'];
                        $resultPercentage = $daysLeft / $stageDays * 100;
                    ?>
                    <p>
                        <?php
                            echo "You have " . $daysLeft . " days left.";
                        ?>
                    </p>
                    <div class="progress">
                        <div class="determinate" style="width: <?php echo number_format((float)$resultPercentage, 2, '.', ''); ?>%"></div>
                    </div>
                </div>
            </div>
            <br/>
            <br/>
            <?php
             }
            ?>
        </div>


    </body>

    </html>
