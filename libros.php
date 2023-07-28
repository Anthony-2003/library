
<!DOCTYPE html>
<html lang="en">

<head>
     <title>Libros</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/index.css">
     <link rel="stylesheet" href="assets/css/libros.css ?v=<?php echo(rand()); ?>">
     <link rel="stylesheet" href="assets/css/normalize.css">
     <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
     <script defer src="assets/js/index.js?v=<?php echo(rand()); ?>"></script>
     <script defer src="assets/js/filterBooks.js?v=<?php echo(rand()); ?>"></script>
     <script src="https://kit.fontawesome.com/b74657a5b7.js" crossorigin="anonymous"></script>
</head>

<body>
     <header class="header container">
          <a href="index.php"><img src="assets/img/logo.png" alt="logo" class="logo logo--library"></a>
          <nav>
               <ul class="navList" id="_navList">
                    <li class="navList__item navList__item--margin"><a href="#" class="navList__link">Libros</a></li>
                    <li class="navList__item"><a href="#" class="navList__link">Autores</a></li>
                    <li class="navList__item"><a href="#" class="navList__link">Contacto</a></li>
               </ul>
               <div class="nav__toggle nav__toggle--library" id="_toggle">
                    <span class="nav__toggle__line"></span>
                    <span class="nav__toggle__line"></span>
                    <span class="nav__toggle__line"></span>
               </div>
          </nav>
     </header>
     <main class="main container">
          <div class="searchContainer">
               <div class="iconSearchContainer">
                    <img src="assets/img/buscar.png" class="iconSearch" alt="">
               </div>
               <input type="search" name="bookSearch" id="bookSearch" class="search"
                    placeholder="Busca el libro de tu preferencia...">
          </div>

          <section class="categoriesBookContainer">
               <div class="categories">
                    <div class="categoriesHead">
                         <img src="assets/img/categorias.png" class="categoriesIcon" alt="categoria">
                         <h2 class="categoriesTittle">Categorías</h2>
                         <div class="categories__toggle" id="_categoriestoggle">
                              <span class="categories__toggle__line"></span>
                              <span class="categories__toggle__line"></span>
                              <span class="categories__toggle__line"></span>
                         </div>
                    </div>
                    <div class="categoriesBody close" id="categoriesBody">
                         <input type="checkbox" class="categoriesBody__check" id="negocios" name="negocio"
                              value="negocio">
                         <label for="negocios" class="checkLabel"> Negocios</label><br>
                         <input type="checkbox" class="categoriesBody__check" id="mod_cocina" name="mod_cocina"
                              value="mod_cocina">
                         <label for="negocios" class="checkLabel"> Cocina moderna</label><br>
                         <input type="checkbox" class="categoriesBody__check" id="comp_popular" name="comp_popular"
                              value="comp_popular">
                         <label for="negocios" class="checkLabel"> Informática popular</label><br>
                         <input type="checkbox" class="categoriesBody__check" id="psicología" name="psicología"
                              value="psicología">
                         <label for="negocios" class="checkLabel"> Psicología</label><br>
                         <input type="checkbox" class="categoriesBody__check" id="cocina_tradicio"
                              name="cocina_tradicio" value="cocina_tradicio">
                         <label for="negocios" class="checkLabel"> Cocina tradicional</label><br>
                    </div>
               </div>
               <div class="booksContainer">

               </div>
          </section>

     </main>

</body>

</html>