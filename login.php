<!DOCTYPE html>
<?php

require('controladores/funciones.php');

if(estaLogueado()) {
  header('Location: perfil.php');
  exit;
}

if($_POST) {

  $errores = validarLoguin();
  if(!$errores) {
      $usuario = buscarUsuarioPorEmail($_POST['email']);
      if( isset($_POST['recordarme']) ) {
          recordarUsuario($_POST['email']);
      }
      loguearUsuario($usuario);
  }
}

 ?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleLogin.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Work+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/86f3787a46.js" crossorigin="anonymous"></script>
    <title></title>
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
                        <li><a href="faq">Faq</a></li>
                        <li><a href="ABM.php">ABM</a></li>
                        <li><a href="contacto.php">contactanos</a></li>
                        <li><a href="register.php">registrate</a></li>
                        <li><a href="login.php">iniciar sesion</a></li>
                    </ul>
                 </nav>
            </div>
        </div>
        <div class="contenido">
           <div class=main-container>
              <div class="title">
                  <h1>Shovel knight</h1>
                </div>
                  <div class="formulario">
                    <div class="formulario-container">
                        <div class="subtitulo">
                              <h2>Iniciar sesion</h2>
                            </div>
                            <div class="login-plataformas">
                                <div class="login-facebook">
                                  <div class="icono-facebook">
                                    <i class="fab fa-facebook-square"></i>
                                   </div>
                                   <div class="texto-facebook">
                                    <p>Conectate con facebook</p>
                                  </div>
                                </div>
                                <div class="login-steam">
                                  <div class="icono-steam">
                                    <i class="fab fa-steam-square"></i>
                                   </div>
                                   <div class="texto-steam">
                                    <p>Conectate con Steam</p>
                                  </div>
                                </div>
                            </div>
                          <form action="login.php" method="post" enctype="multipart/form-data" >
                            <div class="login-nombre">
                             <label for="email">Email:</label><br>
                              <input type='text' name='email' value="<?= isset($_POST['email']) ? $_POST['email'] : '' ?>" placeholder="Ingresá tu email"><br/>
                                <?php if(isset($errores['email'])): ?> 
                                  <span style="color:red;"><?= $errores['email']?></span>
                                <?php endif; ?>
                            </div>
                              <div class="login-pass">
                               <label for="pass">Contraseña:</label><br>
                                 <input id="password" type="password" name="password" placeholder="ingrese su contraseña"><br>
                                   <?php if(isset($errores["password"])): ?>
                                     <span style="color:red;"><?= $errores["password"]?></span>
                                   <?php endif; ?>
                              </div>
                              <div class="guardar">
                                 <label style="display:block;"><input type="checkbox" name="recordarme">Recordarme</label>
                              </div>
                              <div class="formulario-button">
                                  <button type="submit" name="button">¡Iniciar sesion!</button>
                                </div>
                              </form>
                                  <div class="terminos">
                                    <p> <a href="#">¿Olvidaste tu contraseña?</a></p>
                                    <p>No tienes cuenta? <a href="register.html">¡Registrate!</a></p>
                                  </div>
                            </div>
                        </div>
           </div>      
       </div>
           <div id="footer">
              <img src="img/logo.jpg">
                <div class="block-footer">
                  <ul>
                     <li><a href="#">Home</a></li>
                     <li><a href="#">Quienes</a></li>
                     <li><a href="#">Servicios</a></li>
                     <li><a href="#">Sucursales</a></li>
                     <li><a href="contacto.html">Contacto</a></li>
                     <li><a href="#">Terminos</a></li>
                     <li><a href="#">Privacidad</a></li>
                     <li><a href="#">Cookies</a></li>
                      </ul>
                </div> 
      </div>
  </body>
</html>
