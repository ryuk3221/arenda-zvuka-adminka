<?php
require "../functions/connect.php";

//Извлекаю данные добавленного раздела
$name = $_POST['name'];
$text = $_POST['text'];
$order = $_POST['order'];
$icon = $_POST['icon'];

//Подготавливаю sql запрос
$sql = "INSERT INTO `razdeli` 
  (`id`, `name`, `text`, `order`, `icon`)
  VALUES (NULL, '{$name}', '{$text}', '{$order}', '{$icon}')";

//Выполняю запрос
$result = $connect->query($sql);

header("Location:../admin-pages/add-razdel.php");
?>