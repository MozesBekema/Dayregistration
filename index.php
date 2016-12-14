<!doctype html>
<html>
    <?php
        include("inc/head.php");
    ?>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <?php
                include("inc/menu.php");
            ?>
            <div class="card-wide mdl-card mdl-shadow--2dp">
                <div class="mdl-card__title">
                    <h2 class="mdl-card__title-text">Welcome</h2>
                </div>
                <div class="mdl-card__supporting-text">
                    With the technology and software of today there are a lot of options to keep track of your work activities. Now the problem with all this software is that it is quite complicated to keep it up and don't forget to fill in what you did and for how many hours.<br/>
                    <br/>
                    That's why we made this web application, for you. Anything you find on this platform will be as simple and understandable as posible so you can start working with it immediately.<br/>
                    <br>
                    Now, go ahead and click below.
                </div>
                <?php include("inc/register.php");?>
            </div>
        </div>
        <div class="mdl-textfield mdl-js-textfield mdl-datepicker mdl-js-datepicker></div>
    </body>
</html>
