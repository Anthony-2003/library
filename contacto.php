<!DOCTYPE html>
<html lang="en">

<head>
    <title>Contactos</title>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="assets/css/index.css">
    <link rel="stylesheet" href="assets/css/normalize.css">
    <link rel="shortcut icon" href="assets/img/favicon.ico" type="image/x-icon">
    <link rel="stylesheet" href="assets/css/contacto.css?v=<?php echo(rand()); ?>">
    <script defer src="assets/js/index.js?v=<?php echo(rand()); ?>"></script>
    <script src="https://kit.fontawesome.com/b74657a5b7.js" crossorigin="anonymous"></script>
</head>

<body>
    <?php include('layout/header.php');?>
    <main class="container">
        <form action="#" class="form">
            <div class="form__group">
                <label for="name" id="name-label">Nombre: </label>
                <input type="text" id="name" class="form__group__input" placeholder="Ingresa tu nombre" required>
            </div>

            <div class="form__group">
                <label for="email" id="email-label">Correo: </label>
                <input type="email" id="email" name="email" class="form__group__input" placeholder="Ingresa tu correo"
                    required>
            </div>

            <div class="form__group">
                <label for="subject" id="subject-label">Asunto: </label>
                <input type="text" id="subject" name="subject" class="form__group__input"
                    placeholder="Ingresa el asunto" required>
            </div>

            <div class="form__group">
                <label for="email" id="subject-label">Fecha: </label>
                <input type="date" id="subject" name="subject" class="form__group__input" required>
            </div>

            <div class="form__group">
                <label for="comment" id="comment-label">Comentario: </label>
                <textarea name="comment" id="comment" cols="5000" rows="10" class="form__group__comment"></textarea>
            </div>

            <div class="form__group">
                <button type="submit" class="form__group__submit">
                    Enviar
                </button>
            </div>

        </form>
    </main>
</body>

</html>