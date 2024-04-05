<?php
require "../functions/connect.php";

$razdel_id = $_POST['razdel_id'];
$cat_name = $_POST['name'];
$cat_text = $_POST['text'];
$cat_icon = $_POST['icon'];

//Подготавливаю запрс для добавления категории
$add_cat_sql = "INSERT INTO categories
  (`id`, `razdel_id`, `name`, `text`, `icon`)
  VALUES (NULL, {$razdel_id}, '{$cat_name}', '{$cat_text}', '{$cat_icon}')";

//Выполняю запрос
$result = $connect->query($add_cat_sql);

header('Location:../admin-pages/add-category.php');
?>