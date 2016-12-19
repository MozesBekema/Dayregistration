
<?php
//var_dump($_POST);
include("connect.php");

if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $rolls_id = 2;

    $geruikersnaam = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $query = $conn->prepare("INSERT INTO `users`(username, password, email, rolls_id) VALUES(:username, :password, :email, :rolls_id)");

    $query->execute(array('username' => $username, 'password' => $password, 'email' => $email, 'rolls_id' => $rolls_id));

    if($query){
        echo "gelukt";
    }else{
       echo "foutje";
    }
}

?>



<div class="mdl-card__actions mdl-card--border">
    <a class="mdl-button mdl-button--colored mdl-js-button mdl-js-ripple-effect dialog-button" id="dialogReg">Get Started</a>
        <dialog class="mdl-dialog">
            <button type="button" class="mdl-button mdl-js-button mdl-js-ripple-effect close"><i class="material-icons">clear</i></button>
            <h4 class="mdl-dialog__title"><img src="img/logo.png">Create account</h4>
            <div class="mdl-dialog__content">
                <form action="#" method="post">
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
<<<<<<< HEAD
                        <input class="mdl-textfield__input" type="text" name="username">
                        <label class="mdl-textfield__label" for="sample3">Username</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" name="email">
                        <label class="mdl-textfield__label" for="sample3">Email</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" name="password">
=======
                        <input class="mdl-textfield__input" type="text" required>
                        <label class="mdl-textfield__label" for="sample3">Username</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="email" required>
                        <label class="mdl-textfield__label" for="sample3">Email</label>
                    </div>
                    <div class="mdl-textfield mdl-js-textfield mdl-textfield--floating-label">
                        <input class="mdl-textfield__input" type="password" required>
>>>>>>> origin/master
                        <label class="mdl-textfield__label" for="sample3">Password</label>
                    </div>
                    <div class="mdl-dialog__actions">
                        <button type="submit" class="mdl-button mdl-js-button mdl-js-ripple-effect">Create</button>
                    </div>
                </form>
            </div>
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
