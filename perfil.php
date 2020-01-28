<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/perfil.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Work+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/86f3787a46.js" crossorigin="anonymous"></script>
    <title>Perfil de usuario</title>
  </head>
  <body>
    <div class="container">
    <header>
        <?php require_once("header.php"); ?>
      </header>
      </div>
      <div class="contenido">
        <section id="content-all">
          <section id="content-header">
              <h2>Perfil de usuario</h2>
          </section>
            <div id="cont">
                <div class="foto"><p>foto</p></div>
                <div id="menu">
                  <h3>Menu:</h3>
                    <ul>
                        <li><a href="#">Cambiar usiario</a></li>
                        <li><a href="#">Cambiar contraseña</a></li>
                        <li><a href="#">Cambiar foto</a></li>
                    </ul>
                </div>
                <div id="info">
                  <h3>Informacion:</h3><br>
                   <ul>
                     <li>Nombre de usuario:</li>
                     <li>Inserte nombre</li>
                     <li>Pais:</li>
                     <li>Inserte nacionalidad</li>
                     <li>Numero en el ranking:</li>
                     <li>X</li>
                   </ul>
                </div>
            </div>
            
        </section>
      </div>
      <div id="footer">
      <footer>
       <?php require_once("footer.php")?>
      </footer>
    </div>
  </body>
</html>
