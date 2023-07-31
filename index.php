<!DOCTYPE html>
<html lang="en">

<head>
     <title>Anthony WorkShop</title>
     <meta charset="UTF-8">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <link rel="stylesheet" href="assets/css/index.css?v=<?php echo(rand()); ?>">
     <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
     <script defer src="assets/js/index.js?v=<?php echo(rand()); ?>"></script>
     <script src="https://kit.fontawesome.com/b74657a5b7.js" crossorigin="anonymous"></script>
</head>

<body>
     <?php include('layout/header.php');?>
     <main class="main container">
          <section class="hero">
               <div class="hero__texts">
                    <h1 class="hero__title">
                         Conoce Aventuras Inolvidables
                    </h1>
   
                    <p class="hero__paragraph">En este mágico rincón literario, te invitamos a explorar una amplia
                         selección de libros y sumergirte
                         en un universo de lectura apasionante. Aquí encontrarás una
                         cuidadosa curaduría de libros que abarcan desde los clásicos más queridos hasta las más
                         emocionantes
                         novedades literarias.
                    </p>
                    <a href="libros.php" class="hero__link">Conoce nuestros libros</a>
                    

               </div>
               <picture class="hero__img__container">
                    <source media="(max-width: 900px)" srcset="assets/img/booksImg.png">
                    <img src="assets/img/bookImg.png" alt="libros" class="hero__img">
               </picture>
          </section>
     </main>

</body>

</html>