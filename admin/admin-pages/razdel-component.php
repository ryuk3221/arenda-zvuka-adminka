<?php 
require "../functions/connect.php";

session_start();

//Если пользователь не авторизован перенаправляю на страничку авторизации
if ($_SESSION["isAuth"] == false && empty($_SESSION["isAuth"])) {
  header('Location:../index.php');
}

//Извлекаю id нужного раздела из бд
$razdel_id = $_GET['id'];

//Запрос для получения нужного раздела
$get_current_razdel = "SELECT * FROM razdeli WHERE id={$razdel_id}";
$razdel_data = $connect->query($get_current_razdel);
$razdel_data = $razdel_data->fetch_assoc();
?>


<?php require "head.php"?>

<?php require "sidebar.php"?>
    <div class="page-inner">
      <h1>Раздел - <?php echo $razdel_data['text']?></h1>
      <form  class="form" method="POST" action="../controllers/update-razdel.php">
        <div class="input-box">
          <div class="input-box__title">Текущий идентификатор:</div>
          <input class="input-box__input" name="name" type="text" value="<?php echo $razdel_data['name']?>">
        </div>
        <div class="input-box">
          <div class="input-box__title">Текущий текст:</div>
          <input class="input-box__input" name="text" type="text" value="<?php echo $razdel_data['text']?>">
        </div>
        <div class="input-box">
          <div class="input-box__title">Текущая очередь:</div>
          <input class="input-box__input" name="order" type="number" value="<?php echo $razdel_data['order']?>">
        </div>  
        <div class="input-box">
          <div class="input-box__title">Текущий svg - код иконки:</div>
          <textarea class="input-box__textarea" name="icon"><?php echo $razdel_data['icon']?></textarea>
        </div>
        <button class="form-btn" type="submit">Сохранить</button>
    </form>
    <form class="form" method="POST" action="../controllers/delete-razdel.php">
      <input type="text" name="id" value="<?php echo $razdel_data['id']?>" style="display: none;">
      <button class="form-btn btn-delete" type="submit">Удалить</button>
    </form>
    </div>
  
  
<?php require "footer.php"?>