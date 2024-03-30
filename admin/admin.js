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