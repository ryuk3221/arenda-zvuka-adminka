const dropHeads = document.querySelectorAll('.dropdown-head');
const dropdownItems = document.querySelectorAll('.sidebar__dropdown-item');

const dropdownShow = (event) => {
  const { target } = event;
  const parent = target.closest('.sidebar__dropdown-item');

  dropdownItems.forEach(el => {
    const dropContent = el.querySelector('.dropdown-content');
    if (el != parent) {
      el.classList.remove('dropdown-item--show');
      dropContent.style.height = '0px';
      dropContent.style.marginTop = '0px';
    }
    else {
      el.classList.toggle('dropdown-item--show');

      if (el.classList.contains('dropdown-item--show')) {
        dropContent.style.height = dropContent.scrollHeight + 'px';
        dropContent.style.marginTop = '15px';
      }
      else {
        dropContent.style.height = '0px';
        dropContent.style.marginTop = '0px';
      }
    }
  });
};

dropHeads.forEach(el => {
  el.onclick = dropdownShow;
});

const path = window.location.href;


if (path.includes('razdel-component.php') || path.includes('add-razdel.php')) {
  const razdelDrop = document.querySelector(`[data-drop="razdeli"]`);
  razdelDrop.classList.add('dropdown-item--show');
  const dropContent = razdelDrop.querySelector('.dropdown-content');
  dropContent.style.height = dropContent.scrollHeight + 'px';
  dropContent.style.marginTop = '15px';
}
else if (path.includes('category.php')) {
  const razdelDrop = document.querySelector(`[data-drop="category"]`);
  razdelDrop.classList.add('dropdown-item--show');
  const dropContent = razdelDrop.querySelector('.dropdown-content');
  dropContent.style.height = dropContent.scrollHeight + 'px';
  dropContent.style.marginTop = '15px';
}

//табы для
const tabs = document.querySelectorAll('.tab-btn');
const tabContents = document.querySelectorAll('.page-tabcontent');

tabs.forEach(btn => {
  btn.onclick = (event) => {
    tabs.forEach((el, index) => {
      if (el == event.target) {
        document.querySelector('.page-tabcontent--active').classList.remove('page-tabcontent--active');
        tabContents[index].classList.add('page-tabcontent--active');
        document.querySelector('.tab-btn--active').classList.remove('tab-btn--active');
        event.target.classList.add('tab-btn--active');
      }
    });
  };
});


if (document.querySelector('.select')) {
  const select = document.querySelector('.select');
  const selectInput = select.querySelector('.select-cat-input');
  const selectHead = select.querySelector('.select-head');

  //Открытие и закрытие выпадающего окна
  selectHead.onclick = () => {
    select.classList.toggle('select--open');
  };

  select.addEventListener('click', (event) => {
    if (event.target.closest('.select-drop__item')) {
      const id = event.target.id;
      const text = event.target.innerHTML;
      selectHead.querySelector('span').innerHTML = text;
      select.classList.remove('select--open');
      selectInput.setAttribute('value', id);
    }
  });

  //Поиск категорий в select
  const searchInput = document.querySelector('.select-search');
  const selectItems = document.querySelectorAll('.select-drop__item');
  searchInput.onkeyup = (event) => {
    const inputValue = searchInput.value.toLocaleUpperCase();
    selectItems.forEach(item => {
      const itemValue = item.innerHTML.toLocaleUpperCase();
      if (itemValue.includes(inputValue)) {
        item.style.display = 'block';
      } else {
        item.style.display = 'none';
      }
    });
  };

}