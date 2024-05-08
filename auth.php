<?php 
    session_start();

       if(isset($_SESSION['login'])){
           header("Location: /profile/");
           exit;
      }
      include "header.php"
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Hotel</title>
    <link rel="stylesheet" href="index.css">
    <link rel="stylesheet" href="index2.css">
</head>
<body>
   
<section class="page">
    <div class="container p-3">
        <?php
            if(isset($_GET['message'])){
                echo "<div class='border border-danger text-danger
                                    text-center pt-4 pb-4 mb-3'>
                {$_GET['message']}
                </div>";
            }
        ?>
        <!-- <h1 class="text">Вход</h1> -->
    </div>
</section>
<div class="avtoriz">
    <form action="login.php" method="post" class="m-auto">
        <h1 class="text">Вход</h1>
        <div class="">
            <label for="login" class="text23">Ваш логин:<br></label>
            <input type="text" class="login23"id="login" name="login" required>
        </div>

        <div class="">
            <label for="password" class="text23">Ваш пароль:<br></label>
            <input type="password" class="password23" id="password" name="password" required>
        </div>
        <input type="submit" class="card-button button23" value="Войти"><br>
        <a href="registration.php" class="menu-link link23">Регистрация</a>
    </form>
</div>
<style>


        body{
            background: url(fon.jpg);
            width: 100%;
            height: 1000px;
            margin-top: 0px;
            padding-top:0px;
        }
    </style>
</body>
</html>
