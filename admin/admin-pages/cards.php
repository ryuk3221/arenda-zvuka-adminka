<?php 
require "head.php";
require "sidebar.php";
?>

<div class="page-inner">
  <h1 class="page-inner__title page-inner__title1">Карточки товаров <a class="add-tovar-link" href="add-tovar.php">Добавить товар</a></h1>
  <div class="cards-controls">
    <div class="filter">
      Фильтрация
      <svg width="20" height="20" viewBox="0 0 20 20" style="transform: rotate(90deg)">
        <path fill="#000" d="M6.5 5.5 11 10l-4.5 4.5L8 16l6-6-6-6-1.5 1.5z"></path>
      </svg>
    </div>
    <div class="sort">
      Сортировка
      <svg width="20" height="20" viewBox="0 0 20 20" style="transform: rotate(90deg)">
        <path fill="#000" d="M6.5 5.5 11 10l-4.5 4.5L8 16l6-6-6-6-1.5 1.5z"></path>
      </svg>
    </div>
    <div class="search">
      <div class="search-input-box">
        <input type="text" placeholder="Поиск позиций...">
      </div>
    </div>
  </div>

  <div class="cards-items">
    <div class="card-item">
      <div class="card-item__img">
        <img src="../../images/product/big-img.jpg" alt="">
      </div>
      <div class="card-item__name">Акустическая система Generation-S Model 5</div>
      <div class="card-item-controls">
        <a class="card-item__link" href="">Перейти</a>
        <button class="card-item__btn-edit">Редактировать</button>
        <a class="card-item__delete-link" href="">Удалить</a>
      </div>
    </div>
    <div class="card-item">
      <div class="card-item__img">
        <img src="../../images/product/big-img.jpg" alt="">
      </div>
      <div class="card-item__name">Акустическая система Generation-S Model 5</div>
      <div class="card-item-controls">
        <a class="card-item__link" href="">Перейти</a>
        <button class="card-item__btn-edit">Редактировать</button>
        <a class="card-item__delete-link" href="">Удалить</a>
      </div>
    </div>
    <div class="card-item">
      <div class="card-item__img">
        <img src="../../images/product/big-img.jpg" alt="">
      </div>
      <div class="card-item__name">Акустическая система Generation-S Model 5</div>
      <div class="card-item-controls">
        <a class="card-item__link" href="">Перейти</a>
        <button class="card-item__btn-edit">Редактировать</button>
        <a class="card-item__delete-link" href="">Удалить</a>
      </div>
    </div>
    <div class="card-item">
      <div class="card-item__img">
        <img src="../../images/product/big-img.jpg" alt="">
      </div>
      <div class="card-item__name">Акустическая система Generation-S Model 5</div>
      <div class="card-item-controls">
        <a class="card-item__link" href="">Перейти</a>
        <button class="card-item__btn-edit">Редактировать</button>
        <a class="card-item__delete-link" href="">Удалить</a>
      </div>
    </div>
  </div>
  <div class="pagination">
    <a href="">1</a>
    <a href="">2</a>
    <a href="">3</a>
  </div>
  
</div>

<?php require "footer.php"?>