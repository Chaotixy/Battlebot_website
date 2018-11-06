<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <title>Login page</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="stylesheet" type="text/css" href="CSS/BOT.css">
    </head>
    <body>
        <?php
        $username_error = "";
        $username = "";
        $password_error = "";
        $password = "";
        $realPassword = "admin";
        $realUsername = "admin";

        if ($_SERVER["REQUEST_METHOD"] == "POST") {

            if (empty(trim($_POST["username"]))) {
                $username_error = " * Please put in a username";
            } else {
                $username = trim($_POST["username"]);
            }

            if (empty(trim($_POST['password']))) {
                $password_error = "* Please put in a password";
            } else {
                $password = trim($_POST['password']);
            }

            if (empty($username_error) && empty($password_error)) {
                if ($password == $realPassword && $username == $realUsername) {
                    session_start();
                    $_SESSION['userName'] = $username;
                    header("location: UpdateScores.php");
                } else {
                    $password_error = "* Wrong password";
                }
            }
        }
        ?>
        <div id="wrapper">
            <div class="background">
                <div class="body">
                    <img class = "pro" src = "pictures/propic.jpg">
                    <div class = "body2">
                        <form action = "" method = "POST">
                            <h3 style="font-family:comic Sans MS;">Username:<br/> <input type = "text" name = "username"></h3><br>
        <?= $username_error ?>
                            <h3 style="font-family:comic Sans MS;">Password:<br/> <input type = "password" name = "password"></h3><br>
        <?= $password_error ?>
                            <input style="font-family:comic Sans MS;" type = "submit" name = "submit" value = "Login">                
                        </form>
                        <br>
                        <form method="get" action="index.php">
                            <button type="submit" id="indexx">Index</button>
                        </form>
                    </div>
                </div>           
            </div>
    </body>
</html>