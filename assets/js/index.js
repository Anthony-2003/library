const navList = document.getElementById("_navList");
const btnToggle = document.getElementById("_toggle");

function toggleElement(element) {
  element.classList.toggle("open");
  element.classList.toggle("close");
}

function disableScroll() {
  document.body.style.overflow = "hidden";
}

function enableScroll() {
  document.body.style.overflow = "auto";
}

btnToggle.addEventListener('click', () => {
  toggleElement(navList);
  toggleElement(btnToggle);

  navList.classList.contains('open') ? disableScroll() : enableScroll(); 
});

/*btnCategoriesToggle.addEventListener('click', () => {
  toggleElement(categoriesBody);
  toggleElement(btnCategoriesToggle);
});*/



