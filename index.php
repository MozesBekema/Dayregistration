<!doctype html>
<html>
<?php
        include("inc/head.php");
    ?>

    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <header class="mdl-layout__header">
                <div class="mdl-layout__header-row"> <span class="mdl-layout-title">Dagen Registratie</span>
                    <!-- Title -->
                    <!-- Add spacer, to align navigation to the right -->
                    <div class="mdl-layout-spacer"></div>
                    <!-- Navigation. We hide it in small screens. -->
                    <nav class="mdl-navigation mdl-layout--large-screen-only">
                        <?php include("inc/link.php") ?>
                    </nav>
                </div>
            </header>
            <div class="mdl-layout__drawer"> <span class="mdl-layout-title"><img src="img/logo.png">Dagen Registratie</span>
                <nav class="mdl-navigation">
                    <?php include("inc/link.php") ?>
                </nav>
            </div>
            <main class="mdl-layout__content">
                <div class="page-content">
                    <!-- Your content goes here -->
                    <!-- Wide card with share menu button -->
                    <style>

                    </style>
                    <div class="card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Welcome</h2> </div>
                        <div class="mdl-card__supporting-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis pellentesque lacus eleifend lacinia... </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Get Started</a>
                        </div>
                        <div class="mdl-card__menu">
                            <button class="mdl-button mdl-button--icon mdl-js-button mdl-js-ripple-effect"> <i class="material-icons">share</i> </button>
                        </div>
                    </div>
                </div>
            </main>
        </div>
    </body>

</html>
