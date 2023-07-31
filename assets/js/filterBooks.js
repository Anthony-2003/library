document.addEventListener("DOMContentLoaded", function() {
    getData();
    const checkboxes = document.querySelectorAll('.categoriesBody__check');
    checkboxes.forEach(checkbox => {
        checkbox.addEventListener('change', filterBooksByCheck);
    });
  });
  
  /* Escuchar el evento 'input' en el campo de búsqueda */
  document.getElementById("bookSearch").addEventListener("input", function() {
    getData();
  });
  
 
  function getData() {
    let input = document.getElementById("bookSearch").value;
    let url = "http://localhost/proyecto-final-web/data/loadBooks.php";
  
    let formData = new FormData();
    formData.append('bookSearch', input);
  
    fetch(url, {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      // Actualizar la sección de libros con los resultados filtrados
      updateBooksContainer(data);
    })
    .catch(err => console.log(err));
  }

  function filterBooksByCheck() {
    const searchTerm = document.getElementById("bookSearch").value;

    // Obtener las categorías seleccionadas de los checkboxes
    const checkboxes = document.querySelectorAll('.categoriesBody__check');
    const selectedCategories = Array.from(checkboxes)
        .filter(checkbox => checkbox.checked)
        .map(checkbox => checkbox.value);

    let url = "http://localhost/proyecto-final-web/data/loadBooks.php";

    let formData = new FormData();
    formData.append('bookSearch', searchTerm);

    // Agregar las categorías seleccionadas al FormData
    selectedCategories.forEach(category => {
        formData.append('categories[]', category);
    });

    fetch(url, {
        method: "POST",
        body: formData
    })
    .then(response => response.json())
    .then(data => {
        // Actualizar la sección de libros con los resultados filtrados
        updateBooksContainer(data);
    })
    .catch(err => console.log(err));
}


  function updateBooksContainer(data) {
    // Obtener la referencia a .booksContainer
    const booksContainer = document.querySelector('.booksContainer');
    // Limpiar el contenido actual de .booksContainer
    booksContainer.innerHTML = '';
  
    // Iterar sobre los datos y construir la estructura de la tarjeta de libro
    data.forEach(book => {

      const authorCard = document.createElement('div');
      authorCard.classList.add('authorCard');

      setTimeout(() => {
        authorCard.style.opacity = 1; // Cambiar la opacidad a 1 (completamente opaco) para mostrar la tarjeta con una transición suave
      }, 10);
  
      const bookImage = document.createElement('img');
      bookImage.src = book.fotografia;
      bookImage.alt = book.titulo;
      bookImage.classList.add('bookCard__img');
      authorCard.appendChild(bookImage);
  
      const bookInformation = document.createElement('div');
      bookInformation.classList.add('bookCard__information');
  
      const bookTitle = document.createElement('h2');
      bookTitle.classList.add('bookCard__information__title');
      bookTitle.textContent = book.titulo;
      bookInformation.appendChild(bookTitle);
  
      const bookType = document.createElement('span');
      const strong = document.createElement('strong');
      strong.textContent = "Tipo: ";
      bookType.textContent = book.tipo;
      bookInformation.appendChild(strong);
      bookInformation.appendChild(bookType);
  
      const bookPrice = document.createElement('p');
      bookPrice.classList.add('bookCard__information__price');
      bookPrice.textContent = '$' + book.precio;
      bookInformation.appendChild(bookPrice);
  
      const bookNote = document.createElement('p');
      bookNote.classList.add('bookCard__information__note');
      bookNote.textContent = book.notas;
      bookInformation.appendChild(bookNote);
  
      const bookDate = document.createElement('h3');
      bookDate.textContent = book.fecha_pub.split(' ')[0];
      bookInformation.appendChild(bookDate);
  
      authorCard.appendChild(bookInformation);
      booksContainer.appendChild(authorCard);
    });

  }
  



