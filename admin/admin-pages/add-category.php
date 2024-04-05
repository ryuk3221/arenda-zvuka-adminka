<?php 
require "../functions/connect.php";

session_start();

//Если пользователь не авторизован перенаправляю на страничку авторизации
if ($_SESSION["isAuth"] == false && empty($_SESSION["isAuth"])) {
  header('Location:../index.php');
}

$get_razdeli_sql = "SELECT * FROM razdeli";
$razdeli_data = $connect->query($get_razdeli_sql);

?>


<?php require "head.php"?>

<?php require "sidebar.php"?>
    <div class="page-inner">
      <h1 class="page-inner__title">Добавление категории</h1>
      <form  class="form" method="POST" action="../controllers/add-category.php">
      <div class="input-box">
          <div class="input-box__title">Выберите к какому разделу относится категория</div>
          <select name="razdel_id">
            <?php foreach($razdeli_data as $razdel) {?>
              <option value='<?php echo $razdel['id']?>'><?php echo $razdel['text']?></option>
            <?php }?> 
          </select>
        </div>
        <div class="input-box">
          <div class="input-box__title">Введите идентификатор английскими буквами <span>(например "mikrofoni")</span>:</div>
          <input class="input-box__input" name="name" type="text" placeholder="example...">
        </div>
        <div class="input-box">
          <div class="input-box__title">Введите текст который будет отображаться на сайте <span>(например "Микрофоны")</span>:</div>
          <input class="input-box__input" name="text" type="text" placeholder="example...">
        </div>
        <div class="input-box">
          <div class="input-box__title">Введите svg-код иконки:</div>
          <textarea class="input-box__textarea" name="icon"></textarea>
        </div>
        <button class="form-btn" type="submit">Добавить</button>
      </form>
    </div>
  
  
<?php require "footer.php"?>