<?php

if(isset($_POST['submit'])) {
    $file = "mensajes.json";
    $arr = array(
        'nombre'     => $_POST['nombre'],
        'email'    => $_POST['email'],
        'mensaje'  => $_POST['mensaje']
    );
    $mensajes = json_encode($arr);
    file_put_contents($file, $mensajes);
    echo $mensajes;
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
    <header>
        <?php require_once("header.php"); ?>
      </header>
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
                            </div> <br>
                            <div class="form-email">
                                <label class="email" for="email">Correo electrónico</label><br> <br>
                                <input id="email" type="email" name="email" placeholder="Ingrese su email">
                            </div> <br>
                            <div class="form-message">
                                <label class="mensaje" for="mensaje">Mensaje</label><br> <br>
                                <input id="mensaje" type="comment" name="mensaje" placeholder="Escriba su mensaje...">
                            </div>
                            <div class="formulario-button">
                                <input type="submit" name="submit" id="submit" value="Submit">
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div id="footer">
       <footer>
       <?php require_once("footer.php")?>
       </footer>
    </div>

</body>

</html>