
const navList = document.getElementById("_navList");
const btnToggle = document.getElementById("_toggle");

function disableScroll() {
    document.body.style.overflow = "hidden";
  }

  function enableScroll() {
    document.body.style.overflow = "auto";
  }
  

btnToggle.addEventListener('click', () => {
   navList.classList.toggle("open");
   btnToggle.classList.toggle("close");

  navList.classList.contains('open') ? disableScroll() : enableScroll(); 

});
