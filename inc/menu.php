<?php
    include("connect.php")
?>
<header class="mdl-layout__header">
    <div class="mdl-layout__header-row">
        <a href="index.php"><span class="mdl-layout-title mdl-js-button mdl-js-ripple-effect">Day Registration</span></a>
        <!-- Title -->
        <!-- Add spacer, to align navigation to the right -->
        <div class="mdl-layout-spacer"></div>
        <!-- Navigation. We hide it in small screens. -->
        <nav class="mdl-navigation mdl-layout--large-screen-only">
            <?php
                if(!isset($_SESSION['login_user'])){
            ?>
            <a href="login.php">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect dialog-button buttonRed">Login</button>
            </a>
            <?php
                }else{
            ?>
            <a href="index.php?action=logout">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect dialog-button buttonRed">Logout</button>
            </a>
            <?php
                }
                if ($_SERVER['REQUEST_URI'] === 'login.php') {
            ?>
            <a href="index.php">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect dialog-button buttonRed">Back</button>
            </a>
            <?php
                }
            ?>
        </nav>
    </div>
</header>
<div class="mdl-layout__drawer">
    <span class="mdl-layout-title">
        <a href="index.php">
            <img src="img/logo.png">
        </a>Day Registration
    </span>
    <nav class="mdl-navigation mdl-js-ripple-effect">
        <?php
                if(!isset($_SESSION['login_user'])){
            ?>
            <a href="login.php">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect dialog-button buttonBlack">Login</button>
            </a>
            <?php
                }else{
            ?>
            <a href="index.php?action=logout">
                <button class="mdl-button mdl-js-button mdl-js-ripple-effect dialog-button buttonBlack">Logout</button>
            </a>
            <?php
                }
            ?>
    </nav>
</div>
