<!doctype html>
<html>
<?php
        include("inc/head.php");
    ?>

    <body>
        <!-- Always shows a header, even in smaller screens. -->
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <?php
                include("inc/menu.php");
            ?>
                    <!-- Your content goes here -->
                    <!-- Wide card with share menu button -->
                    <div class="card-wide mdl-card mdl-shadow--2dp">
                        <div class="mdl-card__title">
                            <h2 class="mdl-card__title-text">Welcome</h2> </div>
                        <div class="mdl-card__supporting-text"> Lorem ipsum dolor sit amet, consectetur adipiscing elit. Mauris sagittis pellentesque lacus eleifend lacinia... </div>
                        <div class="mdl-card__actions mdl-card--border">
                            <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect">Get Started</a>
                        </div>
                        <a href="index.php">
                            <div class="mdl-card__menu">
                                <div id="tt4" class="icon material-icons">share</div>
                                <div class="mdl-tooltip" for="tt4">
                                    Share our application<br>via social media
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </main>
        </div>
    </body>
</html>
