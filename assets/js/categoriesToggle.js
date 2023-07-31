const btnCategoriesToggle = document.getElementById("_categoriestoggle");
const categoriesBody = document.getElementById("categoriesBody");

function toggleElement(element) {
    element.classList.toggle("open");
    element.classList.toggle("close");
  }

btnCategoriesToggle.addEventListener('click', () => {
  toggleElement(categoriesBody);
  toggleElement(btnCategoriesToggle);
});