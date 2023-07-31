<!DOCTYPE html>
<html lang="en">

<head>
     <title>Autores</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/index.css ?v=<?php echo(rand()); ?>">
     <link rel="stylesheet" href="assets/css/libros.css ?v=<?php echo(rand()); ?>">
     <link rel="stylesheet" href="assets/css/normalize.css">
     <link rel="stylesheet" href="assets/css/autores.css">
     <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
     <script defer src="assets/js/index.js?v=<?php echo(rand()); ?>"></script>
     <script defer src="assets/js/filterAuthors.js?v=<?php echo(rand()); ?>"></script>
     <script src="https://kit.fontawesome.com/b74657a5b7.js" crossorigin="anonymous"></script>
</head>

<body>
     <?php include('layout/header.php');?>

     <main class="main container">
          <div class="searchContainer">
               <div class="iconSearchContainer">
                    <img src="assets/img/buscar.png" class="iconSearch" alt="">
               </div>
               <input type="search" name="authorSearch" id="authorSearch" class="search"
                    placeholder="Busca el autor de tu preferencia...">
          </div>

          <section class="categoriesBookContainer">
               <div class="booksContainer authorsContainer">

               </div>
          </section>

     </main>

</body>

</html>