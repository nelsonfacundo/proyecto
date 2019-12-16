<?php

require_once('controladores/validacionContacto.php');

$arrayDeErrores = "";

if($_POST) {
    $arrayDeErrores = validacionDeMensaje($_POST);
    if(count($arrayDeErrores) === 0) {
        // Envío el mensaje
        $datosFinales = [
            'nombre' => trim($_POST['nombre']),
            'email' => $_POST['email'],
            'mensaje' => $_POST['mensaje']
        ];
        // ENVIAR A LA BASE DE DATOS $datosFinales
        $jsonDeMensaje = json_encode($datosFinales);
        file_put_contents('mensajes.json', $jsonDeMensaje . PHP_EOL, FILE_APPEND);
        header("Location: register.php");
        
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
                            <label class="name" for="nombre">Nombre</label><br> <br>
                            <input id="nombre" type="text" name="nombre" placeholder="Ingrese su usuario">
                        </div> <br>
                        <div class="form-mail">
                            <label class="mail" for="mail">Correo electrónico</label><br> <br>
                            <input id="mail" type="email" name="mail" placeholder="Ingrese su email">
                        </div> <br>
                        <div class="form-message">
                            <label class="message" for="message">Mensaje</label><br> <br>
                            <textarea name="message" id="message" cols="35" rows="8"
                                placeholder="Escriba su mensaje aquí..."></textarea>
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
                <li><a href="index.html">Home</a></li>
                <li><a href="login.html">Iniciá sesión</a></li>
                <li><a href="ranking.html">Ranking</a></li>
                <li><a href="perfil.html">Perfil</a></li>
                <li><a href="contacto.html">Contacto</a></li>
                <li><a href="ABM.html">ABM</a></li>
                <li><a href="faq.html">Preguntas frecuentes</a></li>

            </ul>
        </div>
    </div>

</body>

</html>