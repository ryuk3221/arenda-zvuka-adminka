<?php
require "../functions/connect.php";

$updated_id = $_POST['id'];
$updated_name = $_POST['name'];
$updated_text = $_POST['text'];
$updated_icon = $_POST['icon'];

//Подготавливаю запрос на обновление данных раздела
$update_razdel_sql = "UPDATE razdeli
  SET `name`='{$updated_name}', `text`='{$updated_text}', `icon`='{$updated_icon}'
  WHERE `id`='{$updated_id}'
";

//Выполняю запрос
$result = $connect->query($update_razdel_sql);

header("Location:../admin-pages/razdel-component.php?id={$updated_id}");

?>