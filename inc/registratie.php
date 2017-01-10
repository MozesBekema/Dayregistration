<?php

include("connect.php");

if(isset($_POST['submit']) && isset($_POST['username']) && isset($_POST['password'])){

    $username = $_POST['username'];
    $password = $_POST['password'];
    $roles_id = 2;

    $username = filter_var($username, FILTER_SANITIZE_STRING);
    $password = filter_var($password, FILTER_SANITIZE_STRING);

    $query = $conn->prepare("INSERT INTO `users`(username, password, roles_id) VALUES(:username, :password, :roles_id)");

    $query->execute(array('username' => $username, 'password' => $password, 'roles_id' => $roles_id));

    if($query){
        header('Location: login.php');
    }else{
       echo "foutje";
    }
}

?>
    <!doctype>
    <html lang="en">

    <head>
        <meta charset="utf-8">
        <title>Registreer</title>
    </head>

    <body>
        <form action="" method="POST">
            <label for="txt_username">username</label>
            <input type="text" id="txt_username" name="username" placeholder="Een username">
            <br/>
            <label for="txt_password">password</label>
            <input type="text" id="txt_password" name="password" placeholder="Een password">
            <br/>
            <input type="submit" name="submit" value="Registreren">
            </form>
        </body>

    </html>
