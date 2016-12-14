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
                    <div class="mdl-dialog__actions">
                        <button type="button" class="mdl-button">Create</button>
                    </div>
                </form>
            </div>
        </dialog>
        <?php include("dialog.php");?>
        <a href="index.php">
            <div class="mdl-card__menu">
                <div id="tt4" class="icon material-icons">share</div>
                <div class="mdl-tooltip" for="tt4">
                    Share our application<br>via social media
                </div>
            </div>
        </a>
</div>
