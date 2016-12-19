<?php

    include("connect.php");
    session_start();

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: index.php");
    }

    if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){

        $username = $_POST['username'];
        $password = $_POST['password'];

        $username = filter_var($username, FILTER_SANITIZE_STRING);
        $password = filter_var($password, FILTER_SANITIZE_STRING);


        $query = $conn->prepare("SELECT COUNT(`id`) FROM `users` WHERE `username`= :username AND `password` = :password");
        $query->execute(array('username'=>$username, 'password'=>$password));

        $count = $query->fetchColumn();
        if($count == "1"){
            $_SESSION['login_user'] = $username;
        }else{
            echo"Wrong username/password";
        }
    }


?>

<?php
         if(!isset($_SESSION['login_user'])){


        ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Your Username">
            <input type="password" name="password" placeholder="Your Password">
            <input type="submit" name="submit" value="Login">
        </form>
        <?php
         }else{
             echo "You are logt in";
             echo "<a href='login.php?action=logout'>Logout</a>";
         }
             ?>
