<?php
    if(!isset($_SESSION['login_user'])){
        error_reporting(0);
    }
    $username = $_SESSION['login_user'];
    $purple = '#9c27b0;';
    $orange = '#ff5722;';
    $blue = '#3f51b5;';
    $red = '#f44336;';

    $serif = '"Helvetica", "Arial", sans-serif !important;';
    $roboto = '"Roboto", sans-serif;';
    $indie = '"Indie Flower" !important;';

    if(isset($_POST['purpleSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :purple WHERE username = :username");
        $switch->execute(array('purple' => $purple, "username" => $username));
    }

    if(isset($_POST['orangeSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :orange WHERE username = :username");
        $switch->execute(array('orange' => $orange, "username" => $username));
    }

    if(isset($_POST['redSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :red WHERE username = :username");
        $switch->execute(array('red' => $red, "username" => $username));
    }

    if(isset($_POST['blueSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :blue WHERE username = :username");
        $switch->execute(array('blue' => $blue, "username" => $username));
    }

    $switchColor = $conn->prepare ("SELECT `user_color` FROM `users` WHERE `username` = :username");
    $switchColor->execute(array('username'=>$username));

    foreach ($switchColor as $row){
        $color = $row['user_color'];
    }

    if(isset($_POST['serifSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_font`= :serif WHERE username = :username");
        $switch->execute(array('serif' => $serif, "username" => $username));
    }
    if(isset($_POST['robotoSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_font`= :roboto WHERE username = :username");
        $switch->execute(array('roboto' => $roboto, "username" => $username));
    }
    if(isset($_POST['indieSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_font`= :indie WHERE username = :username");
        $switch->execute(array('indie' => $indie, "username" => $username));
    }

    $switchFont = $conn->prepare ("SELECT `user_font` FROM `users` WHERE `username` = :username");
    $switchFont->execute(array('username'=>$username));

    foreach ($switchFont as $row){
        $font = $row['user_font'];
    }









?>
<style>
html,
body {
    margin: 0 auto;
    font-family: <?php echo $font;?>;
    overflow-x: hidden !important;
    background-color: #ffffff;
    -webkit-tap-highlight-color: rgba(255, 255, 255, 0);
}
.logRegBackground {
    background-color: #adccc8;
    overflow: hidden;
    font-family: <?php echo $font?>;
}
.mainBackground {
    background-color:#009688;
    padding-top: 80px;
    font-family: <?php echo $font?>;
}
h1 {
    font-family: <?php echo $font?>;
}
button {
    font-family: <?php echo $font?>;
}
.menuBar {
    background-color:<?php echo $color?>;
    box-shadow: 0px 2px 10px 0px rgba(0, 0, 0, 0.32);
    position: fixed;
    left: 0px;
    top: 0px;
    width: 100%;
    height: 64px;
    z-index: 999999;
}
.fabButton {
    background-color: <?php echo $color?>;
    box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.32);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-top: -25px;
    margin-left: -25px;
    position: absolute;
    float: right;
    text-align: center;
    cursor: pointer;
    transition-duration: 0.2s;
    transition-timing-function: ease;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fabButton i {
    display: inline;
    color: #ffffff;
    line-height: 2.1;
    cursor: pointer;
}
.fabButtonIndex {
    background-color: #ff5722;
    box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.32);
    border-radius: 50%;
    width: 50px;
    height: 50px;
    margin-top: -25px;
    margin-left: -25px;
    position: absolute;
    float: right;
    text-align: center;
    cursor: pointer;
    transition-duration: 0.2s;
    transition-timing-function: ease;
    -webkit-touch-callout: none;
    -webkit-user-select: none;
    -khtml-user-select: none;
    -moz-user-select: none;
    -ms-user-select: none;
    user-select: none;
}
.fabButtonIndex i {
    display: inline;
    color: #ffffff;
    line-height: 2.1;
    cursor: pointer;
}
.fabButton:active {
    filter: brightness(140%);
    box-shadow: 0px 6px 20px 0px rgba(0, 0, 0, 0.32);
}
.addButton {
    width: 40px;
    height: 40px;
    box-shadow:0px 1px 6px 0px rgba(0, 0, 0, 0.32);
    margin: 10px;
    background-color:<?php echo $color?>;
    border-radius:2px;
    transition-duration: 0.2s;
    transition-timing-function: ease;
}
.addButton:active {
    background-color: <?php echo $color?>;
}
.minusButton {
    width: 40px;
    height: 40px;
    box-shadow:0px 1px 6px 0px rgba(0, 0, 0, 0.32);
    margin: 10px;
    background-color:<?php echo $color?>;
    border-radius:2px;
    transition-duration: 0.2s;
    transition-timing-function: ease;
}
.minusButton:active {
    background-color: <?php echo $color?>;
}
.progress {
    position: relative;
    height: 15px;
    display: block;
    width: 80%;
    background-color: <?php echo $color?>;
    border-radius: 2px;
    background-clip: padding-box;
    margin-left: auto;
    margin-right: auto;
    overflow: hidden;
    box-shadow:0px 1px 6px 0px rgba(0, 0, 0, 0.32);
}

.progress .determinate {
    position: absolute;
    background-color: #e5e5e5;
    top: 0;
    bottom: 0;
    transition: width .3s linear;
}
</style>
