<?php 

// FUNCIÓN PARA VALIDAR CAMPOS DEL FORMULARIO DE REGISTRO

function validar($data) {

    // Creo un array de errores vacío.
    $errores = [];

     // CAMPO NOMBRE DE USUARIO
     $userName = trim($data['username']);
     if(strlen($userName) < 5) {
       // creo la posición "username" en el array de errores y guardo el string con el error que le quiero mostrar al usuario
       $errores['username'] = "El nombre de usuario debe tener al menos 5 caracteres";
     }

    // CAMPO EMAIL
    $email = trim($data['email']);
    $email = filter_var($email, FILTER_SANITIZE_EMAIL);
    // si está vacío
    if($email == ""){
      // creo la posición "email" en el array de errores y guardo el string con el error que le quiero mostrar al usuario
      $errores['email'] = "El mail es obligatorio";
    } elseif(!filter_var($email, FILTER_VALIDATE_EMAIL)) {
      $errores['email'] = "El email ingresado no es válido";
    }
    
  // CAMPO CONTRASEÑA
    $password = trim($data['pass']);
    // si está vacío
    if($password == "" ) {
      // creo la posición "password" en el array de errores y guardo el string con el error que le quiero mostrar al usuario
      $errores['pass'] = "La contraseña es obligatoria";
    }
      // si tiene una longitud menos a 6
      elseif (strlen($password) < 6) {
      // creo la posición "password" en el array de errores y guardo el string con el error que le quiero mostrar al usuario
      $errores['pass'] = "La contraseña debe tener al menos 6 caracteres";
    }
     // devuelvo el array de errores. Si no entró en ninǵun condicional de los declarados arriba, el array de errores va a estar vacío
    return $errores;
  }


// FUNCIÓN PARA CREAR UN ARRAY ASOCIATIVO CON LOS DATOS QUE ME LLEGAN POR POST


function guardarUsuario($data) {
    
    $usuario = [
        "username" => $data["username"],
        "email" => $data["email"],
        "password" => password_hash($data["password"], PASSWORD_DEFAULT),
    ];
    
    return $usuario;
}

?>