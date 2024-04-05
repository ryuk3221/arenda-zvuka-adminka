<?php 
require '../functions/connect.php';

$get_razdeli_sql = "SELECT * FROM razdeli";
$razdeli = $connect->query($get_razdeli_sql);

$get_categories_sql = "SELECT * FROM categories";
$categories = $connect->query($get_categories_sql);

?>    
    
    <div class="sidebar">
      <div class="sidebar__inner">
        <div class="sidebar__title">Редактирование</div>
        <div class="sidebar__dropdown-item">
          <div class="dropdown-head">
            Секции
            <svg width="20" height="20" viewBox="0 0 20 20" style="transform: rotate(90deg)">
              <path fill="#fff" d="M6.5 5.5 11 10l-4.5 4.5L8 16l6-6-6-6-1.5 1.5z"></path>
            </svg>
          </div>
          <div class="dropdown-content">
            <a href="cards.php">Карточки</a>
            <a href="">Главная</a>
            <a href="">Контакты</a>
            <a href="">О нас</a>
          </div>
        </div>
        <div class="sidebar__dropdown-item" data-drop="razdeli">
          <div class="dropdown-head">
            Разделы
            <svg width="20" height="20" viewBox="0 0 20 20" style="transform: rotate(90deg)">
              <path fill="#fff" d="M6.5 5.5 11 10l-4.5 4.5L8 16l6-6-6-6-1.5 1.5z"></path>
            </svg>
          </div>
          <div class="dropdown-content">
            <a href="add-razdel.php" style="text-decoration: underline;">Добавить раздел</a>
            <?php foreach ($razdeli as $razdel) {?>
              <a href='razdel-component.php?id=<?php echo $razdel['id'];?>'><?php echo $razdel['text']?></a>
            <?php }?>
          </div>
        </div>
        <div class="sidebar__dropdown-item" data-drop="category">
          <div class="dropdown-head">
            Категории
            <svg width="20" height="20" viewBox="0 0 20 20" style="transform: rotate(90deg)">
              <path fill="#fff" d="M6.5 5.5 11 10l-4.5 4.5L8 16l6-6-6-6-1.5 1.5z"></path>
            </svg>
          </div>
          <div class="dropdown-content">
            <a href="add-category.php" style="text-decoration: underline;">Добавить категорию</a>
            <a href="" style="text-decoration: underline;">Все категории</a>
            <?php foreach($categories as $cat) {?>
              <a href=""><?php echo $cat['text'];?></a>
            <?php }?>
          </div>
        </div>
      </div>
    </div>