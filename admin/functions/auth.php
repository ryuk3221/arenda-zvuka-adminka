<?php
require "connect.php";
session_start();


//Извлекаю логин и пароль из формы
$login = $_POST['login'];
$password = $_POST['password'];

//Подготавлтваю sql запрос
$sql = "SELECT id, login, password FROM user WHERE login='{$login}'";
//Выполняю запрос
$result = $connect->query($sql);
//Извлекаю данные
$user_data = $result->fetch_assoc();

//Если пользователь найден и пароль совпадает
if ($user_data['id'] > 0 && $user_data['password'] === $password) {
  $_SESSION['isAuth'] = true;
  header('Location:../admin-pages/home.php');
}

else {
  $_SESSION['isAuth'] = false;
  header('Location:../index.php');
}

?>