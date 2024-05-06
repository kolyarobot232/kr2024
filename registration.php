<?php
    // $connect = new mysqli("web.edu", "21295", "lugsxs", "21295_db_demo_2024");

    // if($connect->connect_error){
    //     die("Ошибка подключения к базе данных");
    // }
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

<main class="main">
<section class="page">
    <div class="registr">
        <h1 class="text233">Регистрация</h1>
            <form action="/admin/controllers/registration.php" method="post" 
            class="m-auto needs-validation" novalidate>
            <div class="mb-3">
                <label for="surname" class="form-label fs-5">Фамилия<br></label>
                <input type="text" class="vvod" id="surname" name="surname" required>
            </div>
            <div class="mb-3">
                <label for="name" class="form-label fs-5">Имя<br></label>
                <input type="text" class="vvod" id="name" name="name" required>
            </div>
            <div class="mb-3">
                <label for="patronymic" class="form-label fs-5">Отчество<br></label>
                <input type="text" class="vvod" id="patronymic" name="patronymic" required>
            </div>
            <div class="mb-3">
                <label for="login" class="form-label fs-5">Логин<br></label>
                <input type="text" class="vvod" id="login" name="login" required>
            </div>
            <div class="mb-3">
                <label for="email" class="">Адрес электронной почты<br></label>
                <input type="email" class="vvod" id="email" name="email" required>
            </div>
            <div class="mb-3">
                <label for="phone" class="form-label fs-5">Телефон<br></label>
                <input type="tel" class="vvod" id="phone" name="phone" minlength="17" maxlength="17" pattern="/+?[0-9/(/)/-]+" placeholder="+7(XXX)-XXX-XX-XX" required>
            </div>
            <div class="mb-3">
                <label for="password" class="form-label fs-5">Пароль<br></label>
                <input type="password" class="vvod" id="password" name="password" minlength="6" required>
            </div>
            <div class="mb-3">
                <label for="password-repeat" class="">Повторите пароль<br></label>
                <input type="password" class="vvod" id="password-repeat" name="password-repeat" minlength="6" required>
            </div>
            <input type="submit" class="card-button button23" value="Зарегистрироваться">
        </form>
    </div>

</section>
</main>
<style>

        .vvod{
            width:400px;
        height: 25px;
        margin-bottom: 15px;
        }
        .text233{
            margin-top:0px;
        }
        .registr{
            text-align:center;
        border: 5px solid lime;
        width: 500px;
        height: auto;
        padding: 50px;
        margin-top: 50px;
        margin-left: 600px;
        background-color:#00AB76;
        }
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