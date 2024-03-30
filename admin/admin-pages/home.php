<?php 
session_start();

//Если пользователь не авторизован перенаправляю на страничку авторизации
if ($_SESSION["isAuth"] == false && empty($_SESSION["isAuth"])) {
  header('Location:../index.php');
}
?>

<?php require "head.php"?>

<?php require "sidebar.php"?>  
    
    <div class="page-inner">
      <h1 class="page-inner__title">Добро пожаловать в админ-панель :)</h1>
      <div class="block-info">
        <div class="block-info__title">Заголовок какой то имнформации</div>
        <p class="block-info__text">
          А здесь непосредственно, какая то информация  которая что то там...
        </p>
      </div>
      <div class="block-info">
        <div class="block-info__title">Заголовок какой то имнформации</div>
        <p class="block-info__text">
          А здесь непосредственно, какая то информация  которая что то там...
        </p>
      </div>
      <div class="block-info">
        <div class="block-info__title">Заголовок какой то имнформации</div>
        <p class="block-info__text">
          А здесь непосредственно, какая то информация  которая что то там...
        </p>
      </div>
    </div>
  
<?php require "footer.php"?>