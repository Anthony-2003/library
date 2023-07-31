
document.addEventListener("DOMContentLoaded", function() {
    getData();
  });
  

  document.getElementById("authorSearch").addEventListener("input", function() {
    getData();
  });
  
 
  function getData() {
    let input = document.getElementById("authorSearch").value;
    let url = "http://localhost/proyecto-final-web/data/loadAuthors.php";
  
    let formData = new FormData();
    formData.append('authorSearch', input);
  
    fetch(url, {
      method: "POST",
      body: formData
    })
    .then(response => response.json())
    .then(data => {
      console.log(data);
      updateBooksContainer(data);
    })
    .catch(err => console.log(err));
  }

  function updateBooksContainer(data) {
   
    const booksContainer = document.querySelector('.booksContainer');

    booksContainer.innerHTML = '';
  
    data.forEach(author => {
        const authorImg = document.createElement("img");
        authorImg.src = author.fotografia;
        authorImg.classList.add("authorCard__img");
        authorImg.setAttribute("loading", "lazy");
        const authorCard = document.createElement('div');
        const authorCardInformation = document.createElement('div');
        authorCard.classList.add('authorCard');
        authorCardInformation.classList.add('authorCard__information');
      
        setTimeout(() => {
          authorCard.style.opacity = 1; 
        }, 10);
      
        const nombre = document.createElement("p");

        nombre.innerHTML = `<strong>Nombre: </strong> ${author.nombre}`;
        authorCardInformation.appendChild(nombre);

        const apellido = document.createElement("p");

        apellido.innerHTML = `<strong>Apellido: </strong> ${author.apellido}`;
        authorCardInformation.appendChild(apellido);

        const telefono = document.createElement("p");

        telefono.innerHTML = `<strong>Teléfono: </strong> ${author.telefono}`;
        authorCardInformation.appendChild(telefono);

        const direccion = document.createElement("p");

        direccion.innerHTML = `<strong>Dirección: </strong> ${author.direccion}`;
        authorCardInformation.appendChild(direccion);

        const ciudad = document.createElement("p");

        ciudad.innerHTML = `<strong>ciudad: </strong> ${author.ciudad}`;
        authorCardInformation.appendChild(ciudad);

        const pais = document.createElement("p");

        pais.innerHTML = `<strong>pais: </strong> ${author.pais}`;
        authorCardInformation.appendChild(pais);

        const estado = document.createElement("p");

        estado.innerHTML = `<strong>estado: </strong> ${author.estado}`;
        authorCardInformation.appendChild(estado);

        const cod_postal = document.createElement("p");

        cod_postal.innerHTML = `<strong>Código postal: </strong> ${author.cod_postal}`;
        authorCardInformation.appendChild(cod_postal);
    
        authorCard.appendChild(authorImg);
        authorCard.appendChild(authorCardInformation);
        booksContainer.appendChild(authorCard);
      });
      

  }
  