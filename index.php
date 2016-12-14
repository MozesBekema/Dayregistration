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
                <div class="mdl-card__actions mdl-card--border">
                    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect dialog-button" id="show-dialog">Get Started</a>
                        <dialog class="mdl-dialog">
                            <button type="button" class="mdl-button close"><i class="material-icons">clear</i></button>
                            <h4 class="mdl-dialog__title"><img src="img/logo.png">Create account</h4>
                            <div class="mdl-dialog__content">
                                <form action="#">
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="sample3">
                                        <label class="mdl-textfield__label" for="sample3">Username</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="sample3">
                                        <label class="mdl-textfield__label" for="sample3">Email</label>
                                    </div>
                                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                                        <input class="mdl-textfield__input" type="text" id="sample3">
                                        <label class="mdl-textfield__label" for="sample3">Password</label>
                                    </div>

                            </div>
                            <div class="mdl-dialog__actions">
                                <button type="button" class="mdl-button">Create</button>
                            </div>
                                </form>
                        </dialog>
                        <?php include("inc/dialog.php");?>
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
        </div>
    </body>
</html>
