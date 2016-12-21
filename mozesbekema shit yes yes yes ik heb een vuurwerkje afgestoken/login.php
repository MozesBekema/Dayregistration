<?php
     
    include("connect.php");
    session_start();

    if(isset($_GET['action'] ) && $_GET['action'] == "logout"){
        session_destroy();
        header("Location: login.php");
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
            echo"Wrong username or password";
        }
    }

    
?>
    <!DOCTYPE html>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Login pagina</title>
    </head>

    <body>
        <?php
         if(!isset($_SESSION['login_user'])){
             
         
        ?>
        <form action="" method="POST">
            <input type="text" name="username" placeholder="Je username">
            <input type="password" name="password" placeholder="Je password">
            <input type="submit" name="submit" value="Login"> 
        </form>
        <?php
         }else{
             echo "Je bent ingelogd";
             echo "<a href='login.php?action=logout'>Log uit</a>";
         }
             ?>
    </body>

    </html>