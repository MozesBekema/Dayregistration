<div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect dialog-button" id="dialogReg">Get Started</a>
        <dialog class="mdl-dialog">
            <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect close"><i class="material-icons">clear</i></button>
            <h4 class="mdl-dialog__title"><img src="img/logo.png">Create account</h4>
                <form action="" method="post">
                    <br/><br/>
                    <div class="mdl-textfield textfieldPadding mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="text" name="username" required>
                        <label class="mdl-textfield__label" for="sample3">Username</label>
                    </div>
                    <div class="mdl-textfield textfieldPadding mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" name="email" required>
                        <label class="mdl-textfield__label" for="sample3">Email</label>
                    </div>
                    <div class="mdl-textfield textfieldPadding mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" name="password" required>
                        <label class="mdl-textfield__label" for="sample3">Password</label>
                    </div>
                    <div class="mdl-dialog__actions">
                        <button type="submit" name="submitReg" class="mdl-button mdl-js-button mdl-js-ripple-effect">Create</button>
                    </div>
                </form>
        </dialog>
        <script>
            var dialog = document.querySelector('dialog');
            var showDialogButton = document.querySelector('#dialogReg');
            if (! dialog.showModal) {
                dialogPolyfill.registerDialog(dialog);
                }
            showDialogButton.addEventListener('click', function() {
                dialog.showModal();
            });
            dialog.querySelector('.close').addEventListener('click', function() {
                dialog.close();
            });
        </script>
        <a href="index.php">
            <div class="mdl-card__menu">
                <div id="tt4" class="icon material-icons">share</div>
                <div class="mdl-tooltip" for="tt4">
                    Share our application<br>via social media
                </div>
            </div>
        </a>
</div>
