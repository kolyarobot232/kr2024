<?php
    $connect = new mysqli("web.edu", "21295", "lugsxs", "21295_kr2024");

    if($connect->connect_error){
        die("Ошибка подключения к базе данных");
    }
?>