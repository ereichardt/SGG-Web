<?php
// Iniciar o re-usar sesión
session_start();
?>
<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contacto - SGG</title>
    <meta name="description" content="Página de contacto del SGG. Sitio web creado para la parte práctica del segundo parcial de Laboratorio de Computación IV">
    <meta name="author" content="FaArMa, iglop, ereichardt">
    <meta name="robots" content="noindex, nofollow">
    <!-- CSS -->
    <link rel="stylesheet" href="../css/main.css">
</head>
<body>
    <!-- Header -->
    <?php require_once("../php/header.php"); ?>
    <?php require_once("../php/contact.php"); ?>
    <!-- Contenido -->
    <section>
        <h1>Contacto</h1>
        <form action="<?php echo sanitize_input($_SERVER["PHP_SELF"]); ?>" method="post">
            <label for="name">Nombre</label> <span>*<?php echo $name_error ?></span>
            <input type="text" id="name" name="name" placeholder="Escribe tu nombre..." value="<?php echo $name; ?>">
            <label for="email">Correo electrónico</label> <span>*<?php echo $email_error ?></span>
            <input type="email" id="email" name="email" placeholder="Escribe tu correo electrónico..." value="<?php echo $email; ?>">
            <label for="msg">Mensaje</label> <span>*<?php echo $msg_error ?></span>
            <textarea id="msg" name="msg" placeholder="Escribe tu mensaje..."><?php echo $msg; ?></textarea>
            <button type="submit" id="btn-send">Enviar</button>
        </form>
    </section>
    <!-- Footer -->
    <?php require_once("../php/footer.php"); ?>
</body>
</html>