<?php
require "../functions/connect.php";

//Извлекаю id  раздела который нужно удалить
$id = $_POST['id'];

$sql = "DELETE FROM razdeli WHERE id='{$id}'";
$result = $connect->query($sql);

header("Location:../admin-pages/home.php");
?>