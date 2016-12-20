<html>
    <?php
        include("inc/head.php");
    ?>
    <body>
        <?php
            include("inc/menu.php");
        ?>
        <div class="card-wide mdl-card card-wide2 mdl-card2 mdl-shadow--2dp">
            <form method="post" class="loginForm">
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input" type="text" name="username" required>
                    <label class="mdl-textfield__label" for="sample3">Username</label>
                </div><br/>
                <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                    <input class="mdl-textfield__input passwordMargin" type="password" name="password" required>
                    <label class="mdl-textfield__label" for="sample3">Password</label>
                </div>
                <div class="mdl-dialog__actions">
                    <button type="submit" name="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect">Login</button>
                </div>
            </form>
        </div>
    </body>
</html>
