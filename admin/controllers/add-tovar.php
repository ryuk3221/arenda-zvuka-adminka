<?php
require "../functions/connect.php";

$cat_id = $_POST['cat_id'];
$name = $_POST['name'];
$price = $_POST['price'];
$img = $_FILES['img_name']['tmp_name'];
$img_name = $_FILES['img_name']['name'];

//Перемещаю файл в хранилище
//move_uploaded_file($img, 'C:\OSPanel\domains\arenda-zvuka-adminka\admin\storage\\' . $_FILES['img_name']['name']);

$sql = "INSERT INTO `tovari` 
    (`id`, `cat_id`, `name`, `price`, `img_name`) VALUES 
    (NULL, '{$cat_id}', '{$name}', '{$price}', '{$img_name}')";

$result = $connect->query($sql);

var_dump($result);
// header('Location:../admin-pages/card-component.php');
// echo $cat_id;
echo $name;
echo $price;
echo $img_name;
?>