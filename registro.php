<?php
    $usuario = $_POST['username'];
    $mail = $_POST['mail'];
    $password = $_POST['password'];
  
    $password_encriptada = password_hash($password, PASSWORD_BCRYPT);

   
    if ($usuario=="" || $mail=="" || $password=="") {
        echo "Es necesario completar todos los campos";
        die();
    } /* caracteres, cantidad, tipo, comparar contra base y avisar que ya existe */

    include "configuracion_pongcultural.php";
    $sql = "insert into registro (nombre, mail, pass) values ('$usuario', '$mail', '$password_encriptada')";
    $respuesta = mysqli_query($conexion, $sql);

    if ($respuesta==false) {
        echo "No se pudo registrar por un error en la base";
    } /* cuando ingresa redireccionar */






?>