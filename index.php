<?php
    session_start();
    include("inc/logout.php");
?>
<!doctype html>
<html>
    <?php
        include("inc/head.php");
        include("inc/random.php");
    ?>
    <body>
        <div class="mdl-layout mdl-js-layout mdl-layout--fixed-header">
            <?php
                include("inc/menu.php");
                include("inc/indexcard.php");
            ?>
        </div>
    </body>
</html>
