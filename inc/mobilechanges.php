<?php

$username = $_SESSION['login_user'];
    $purple = '#9c27b0';
    $orange = '#ff5722';
    $blue = '#3f51b5';
    $red = '#f44336';


    if(isset($_POST['purpleSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :purple WHERE username = :username");
        $switch->execute(array('purple' => $purple, "username" => $username));
    }

    if(isset($_POST['orangeSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :orange WHERE username = :username");
        $switch->execute(array('orange' => $orange, "username" => $username));
    }

    if(isset($_POST['redSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :red WHERE username = :username");
        $switch->execute(array('red' => $red, "username" => $username));
    }

    if(isset($_POST['blueSubmit'])){
        $switch = $conn->prepare("UPDATE `users` SET `user_color`= :blue WHERE username = :username");
        $switch->execute(array('blue' => $blue, "username" => $username));
    }

    $switchColor = $conn->prepare ("SELECT `user_color` FROM `users` WHERE `username` = :username");
    $switchColor->execute(array('username'=>$username));

    foreach ($switchColor as $row){
        $color = $row['user_color'];
    }
?>
<meta name="theme-color" content="<?php echo $color;?>" />
