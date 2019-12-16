<?php

function validacionDeMensaje ($array) {

$errores = [];

// Validación campo "Nombre"

if( isset($array['nombre']) ) {
    if( empty($array['nombre']) ) {
        $errores['nombre'] = "Este campo debe completarse.";
    }
    elseif( strlen($array['nombre']) < 2 ) {
        $errores['nombre'] = "Tu nombre debe tener al menos 2 caracteres.";
    }
}

// Validación campo "Email"

if( isset($array['mail']) ) {
    if( empty($array['mail']) ) {
        $errores['mail'] = "Este campo debe completarse.";
    }
    elseif( !filter_var($array['mail'], FILTER_VALIDATE_EMAIL) ) {
        $errores['mail'] = "Debés ingresar un email válido.";
    }
}

// Validación campo "Mensaje"

if ( isset ($array['mensaje']) ) {
    if ( empty ($array['mensaje']) ) {
        $errores['mensaje'] = "Debe completar este campo para enviar el mensaje";
    } 
    
}

return $errores;

}

function persistirDato($arrayE, $campo) {
    if( isset($arrayE[$campo]) ) {
        return "";
    } else {
        if(isset($_POST[$campo])) {
            return $_POST[$campo];
        }
    }
}




?>