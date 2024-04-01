<?php
$host = "localhost";
$username = "root";
$pass = "root";
$db = "clear_line";

// Подключение к базе данных.
$connect = mysqli_connect($host, $username, $pass, $db);

// Проверка на ошибки подключения.
if (!$connect) {
    die("Ошибка: " . mysqli_connect_error());
}

?>