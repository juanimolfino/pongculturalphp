<?php
    $mail = $_POST['mail'];
    $password = $_POST['password'];

    if ($mail == "" || $password == "") {
        echo "Debe completar todos los campos";
        die();
    }

    include "configuracion_pongcultural.php";
    $sql = "select * from registro where mail='$mail' and activo=1";
    $rta = mysqli_query($conexion, $sql);

    if ($rta==false) {
        echo "No se pudo conectar";
        die();
    } 
    $fila = mysqli_fetch_array($rta);
    if ($fila==false) {
        die('Usuario incorrecto o inactivo');
    }

    if (password_verify($password, $fila['pass'])) {
        session_start();
        $_SESSION['login_ok'] = true;
        $_SESSION['user_id'] = $fila['id'];
        $_SESSION['user_admin'] = $fila['admin'];

            if ($_SESSION['user_admin'] == 0) {  /* 0 significa que no es administrador */
                
                header("location: panel_autor.php");
            } else {
                header("location: panel_admin.php"); /* CAMBIAR A LA PANTALLA PRINCIPAL DEL ADMINISTRADOR*/
            }
    } else {
        die("Contrasena incorrecta");
    }



?>