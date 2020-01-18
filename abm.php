
<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/styleABM.css">
    <link href="https://fonts.googleapis.com/css?family=Fredoka+One&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Open+Sans|Raleway|Work+Sans&display=swap" rel="stylesheet">
    <script src="https://kit.fontawesome.com/86f3787a46.js" crossorigin="anonymous"></script>
    <title></title>
  </head>
  <body>
    <div class="container">
      <!-- Header-->
      <header>
        <?php require_once("header.php"); ?>
      </header>
      <!-- Fin del Header -->
      <!-- Contenido -->
      <div class="contenido">
        <section id="content-all">
          <h1>Modificar Preguntas</h1>
          <article class="pregunta">
            <!-- Botoner -->
            <button type="" name="button">Agregar</button>
            <button type="" name="button">Eliminar</button>
            <button type="" name="button">Modificar</button>
            <!-- Campos para la pregunta y respuestas -->
            <ul>
              <li>
                <label class="name" for="pregunta">Pregunta</label><br> <br>
                <input id="pregunta" type="text" name="pregunta" placeholder="Ingrese su pregunta">
              </li>
              <li>
                <input id="respuesta" type="text" name="respuesta" placeholder="Ingrese sus respuestas">

              </li>
              <li>
                <input id="respuesta" type="text" name="respuesta" placeholder="Ingrese sus respuestas">

              </li>
              <li>
                <input id="respuesta" type="text" name="respuesta" placeholder="Ingrese sus respuestas">

              </li>
              <li>
                <input id="respuesta" type="text" name="respuesta" placeholder="Ingrese sus respuestas">

              </li>
              <li>
                <button type="submit" name="button">Enviar</button>
              </li>
            </ul>
          </article>
        </section>
      </div>
      <!-- Fin del Contenido -->
      <!-- Footer -->
      <footer>
        <?php require_once("footer.php"); ?>
      </footer>
      <!-- Fin Footer -->
    </div>
  </body>
</html>
