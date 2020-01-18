<?php

require_once('controladores/validacionContacto.php');


if($_POST) {

    $errores = validacionDeMensaje($_POST);

    if (!$errores) {

        $datos = guardarMensaje ($_POST);

        $todosLosDatos = json_encode ($datos);
        file_put_contents ("mensajes.json", $todosLosDatos);

        header ("Location: index.php");
    }

}
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contacto</title>
    <link rel="stylesheet" href="css/styleContact.css">
    <script src="https://kit.fontawesome.com/86f3787a46.js" crossorigin="anonymous"></script>
</head>

<body>
    <div class="container">
        <div id="header">
            <div class="main-header">
                <img src="img/logo.jpg" alt="logo">
                <input type="checkbox" id="menu-bar">
                <label class="fas fa-bars" for="menu-bar"></label>
                <nav class="menu">
                    <ul>
                        <li><a href="index.php">inicio</a></li>
                        <li><a href="ranking.php">ranking</a></li>
                        <li><a href="perfil.php">perfil</a></li>
                        <li><a href="faq.php">Faq</a></li>
                        <li><a href="ABM.php">ABM</a></li>
                        <li><a href="contacto.php">contactanos</a></li>
                        <li><a href="register.php">registrate</a></li>
                        <li><a href="login.php">iniciar sesion</a></li>
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    <div class="main">
        <div class="contenido">
            <div class=main-container>
                <div class="formulario">
                    <div class="formulario-container">
                        <div class="subtitulo">
                            <h2>CONTACTANOS</h2>
                        </div> <br>
                        <form action="" method="post">

                        <div class="form-nombre">
                            <label class="nombre" for="nombre">Nombre</label><br> <br>
                            <input id="nombre" type="text" name="nombre" placeholder="Ingrese su nombre">
                            <?php if(isset($errores["nombre"])): ?>
                            <span style="color:red;"><?= $errores["nombre"]?></span>
                            <?php endif; ?>
                        </div> <br>
                        <div class="form-email">
                            <label class="email" for="email">Correo electrónico</label><br> <br>
                            <input id="email" type="email" name="email" placeholder="Ingrese su email">
                            <?php if(isset($errores['email'])): ?>
                              <span style="color:red;"><?= $errores['email']?></span>
                              <?php endif;?>
                        </div> <br>
                        <div class="form-message">
                            <label class="mensaje" for="mensaje">Mensaje</label><br> <br>
                            <input id ="mensaje" type="comment" name = "mensaje" placeholder = "Escriba su mensaje...">
                            <?php if(isset($errores["mensaje"])): ?>
                              <span style="color:red;"><?= $errores["mensaje"]?></span>
                              <?php endif;?>
                        </div>
                        <div class="formulario-button">
                            <button type="submit" name="button">Enviar</button>
                        </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
        <img src="img/logo.jpg">
        <div class="block-footer">
            <ul>
                <li><a href="index.php">Home</a></li>
                <li><a href="login.php">Iniciá sesión</a></li>
                <li><a href="ranking.php">Ranking</a></li>
                <li><a href="perfil.php">Perfil</a></li>
                <li><a href="contacto.php">Contacto</a></li>
                <li><a href="ABM.php">ABM</a></li>
                <li><a href="faq.php">Preguntas frecuentes</a></li>

            </ul>
        </div>
    </div>

</body>

</html>
