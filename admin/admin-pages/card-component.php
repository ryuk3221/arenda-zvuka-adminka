<?php 
require "head.php";
require "sidebar.php";

// $card_id = $_GET['id'];

?>

<div class="page-inner">
  <h1 class="page-inner__title">Товар - ""</h1>
  <div class="page-tabs">
    <button class="tab-btn tab-btn--active">Общее</button>
    <button class="tab-btn">Мета данные</button>
    <button class="tab-btn">Галлерея</button>
    <button class="tab-btn">Комплекты</button>
    <button class="tab-btn">Параметры</button>
  </div>
  <div class="page-tabcontent page-tabcontent--active">
    <form  class="form" method="POST" action="../controllers/add-tovar.php" enctype="multipart/form-data">
      <div class="input-box">
        <div class="input-box__title">Введите название твоара:</div>
        <input class="input-box__input" name="name" type="text">
      </div>
      <div class="input-box">
        <div class="input-box__title">Выберите категорию:</div>
        <div class="select">
          <input class="select-cat-input" type="text" name="cat_id" value="" style="display: none;">
          <div class="select-head">
            <span>Выбрать...</span>
            <svg width="20" height="20" viewBox="0 0 20 20" style="transform: rotate(90deg)">
              <path fill="#000" d="M6.5 5.5 11 10l-4.5 4.5L8 16l6-6-6-6-1.5 1.5z"></path>
            </svg>
          </div>
          <div class="select-drop">
            <input type="text" class="select-search" placeholder="Поиск..">
            <div class="select-drop__items-container">
              <div class="select-drop__item" id="sabv">Сабвуферы</div>
              <div class="select-drop__item" id="dj">DJ - оборудование</div>
              <div class="select-drop__item" id="micro">Микрофоны</div>
              <div class="select-drop__item" id="sabv">Сабвуферы</div>
              <div class="select-drop__item" id="dj">DJ - оборудование</div>
              <div class="select-drop__item" id="micro">Микрофоны</div>
              <div class="select-drop__item" id="sabv">Сабвуферы</div>
              <div class="select-drop__item" id="dj">DJ - оборудование</div>
              <div class="select-drop__item" id="micro">Микрофоны</div>
            </div>
          </div>
        </div>
      </div>
      <div class="input-box">
        <div class="input-box__title">Введите цену:</div>
        <input class="input-box__input" name="price" type="text">
      </div>  
      <div class="input-box">
        <div class="input-box__title">Загрузите картинку, которая будет отображаться в листинге</div>
        <input type="file" name="img_name">
      </div>
      <button class="form-btn" type="submit">Добавить</button>
    </form>
  </div>
</div>

<?php require "footer.php"?>