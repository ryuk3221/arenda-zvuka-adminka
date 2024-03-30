<?php 
session_start();

//Если пользователь не авторизован перенаправляю на страничку авторизации
if ($_SESSION["isAuth"] == false && empty($_SESSION["isAuth"])) {
  header('Location:../index.php');
}

require "head.php";
require "sidebar.php"
?>

<div class="page-inner">
  <h1 class="page-inner__title">Добавление раздела</h1>
  <form  class="form" method="POST" action="../controllers/add-razdel.php">
    <div class="input-box">
      <div class="input-box__title">Введите идентификатор английскими буквами <span>(например "arenda-zvuka")</span>:</div>
      <input class="input-box__input" name="name" type="text" placeholder="example...">
    </div>
    <div class="input-box">
      <div class="input-box__title">Введите текст который будет отображаться на сайте <span>(например "Аренда звука")</span>:</div>
      <input class="input-box__input" name="text" type="text" placeholder="example...">
    </div>
    <div class="input-box">
      <div class="input-box__title">Введите очередность отображения на сайте:</div>
      <input class="input-box__input" name="order" type="number" placeholder="0">
    </div>
    <div class="input-box">
      <div class="input-box__title">Введите svg-код иконки:</div>
      <textarea class="input-box__textarea" name="icon"></textarea>
    </div>
    <button class="form-btn" type="submit">Добавить</button>
  </form>
</div>

<?php require "footer.php"?>