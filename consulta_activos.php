<?php
include "configuracion_pongcultural.php";
$sql = "select * from registro where and activo=1 and admin=0";
$rta = mysqli_query($conexion, $sql);
if ($rta==false) {
    echo "No se conecto a la BD";
    die();
} 
$fila = mysqli_fetch_array($rta);
session_start();
        $_SESSION['login_ok'] = true;
        $_SESSION['user_id'] = $fila['id'];
        $_SESSION['user_admin'] = $fila['admin'];

?>