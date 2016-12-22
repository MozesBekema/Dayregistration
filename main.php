<?php
    session_start();
    if(!isset($_SESSION['login_user'])){
        header('Location:index.php');
    }
?>
<html>
    <?php
        include("inc/head.php");
    ?>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <?php
                include("inc/menu.php");
            ?>
            <br/>
                <h4 class="mdl-dialog__title"><img src="img/logo.png" class="logoImg">Statistieken</h4><br/><br/>
                <?php
                    if(!isset($_SESSION['login_user'])){
                ?>
                <?php
                    }
             ?>
        </div>
    </body>
</html>


