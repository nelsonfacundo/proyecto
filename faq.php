<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>F.A.Q.</title>
    <link rel="stylesheet" href="css/faq.css">
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
     <section>
         <div class="fondo">
            <ul class="lista">
                <!-- Pregunta 1 -->
                <li class="pregunta" data-resp_id="resp_1">
                  <span>¿Cómo funciona el juego?</span>
                  <i class="ico_resp fas fa-angle-down"></i>
                </li>
                <li class="respuesta" id="resp_1">
                  <span id="sp_resp_1">Todvia no sabemos.</span>
                </li>
              
                <!-- Pregunta 2 -->
                <li class="pregunta" data-resp_id="resp_2">
                  <span>¿Cómo funciona el ranking?</span>
                  <i class="ico_resp fas fa-angle-down"></i>
                </li>
                <li class="respuesta" id="resp_2">
                  <span id="sp_resp_2">De nuevo, tampoco lo sabemos.</span>
                </li>

                 <!-- Pregunta 3 -->
                 <li class="pregunta" data-resp_id="resp_3">
                    <span>¿Qué clase de juego es?</span>
                    <i class="ico_resp fas fa-angle-down"></i>
                  </li>
                  <li class="respuesta" id="resp_3">
                    <span id="sp_resp_3">Cuando lo terminemos, te avisamos.</span>
                  </li>

                   <!-- Pregunta 4 -->
                <li class="pregunta" data-resp_id="resp_4">
                    <span>¿Cuando estará listo?</span>
                    <i class="ico_resp fas fa-angle-down"></i>
                  </li>
                  <li class="respuesta" id="resp_4">
                    <span id="sp_resp_4">En un futuro cercano.</span>
                  </li>
              </ul>
         </div>
     </section>   
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
</div>

       <!-- JQuery -->
  <script src="https://code.jquery.com/jquery-3.3.1.min.js" integrity="sha256-FgpCb/KJQlLNfOu91ta32o/NMZxltwRo8QtmkMRdAu8=" crossorigin="anonymous"></script>
  <!-- Script para controlar la lista de preguntas -->
  <script src="script.js"></script>
  <!-- FontAwesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.5.0/css/all.css" integrity="sha384-B4dIYHKNBt8Bc12p+WXckhzcICo0wtJAoU8YZTY5qE0Id1GSseTk6S+L3BlXeVIU" crossorigin="anonymous">
</body>
</html>