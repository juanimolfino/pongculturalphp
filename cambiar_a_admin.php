<?php
    $id = $_GET['id']; 
    /* var_dump($id);
    die(); */
    
    include "configuracion_pongcultural.php";
    $sql = "select * from registro where id=$id";
    $rta = mysqli_query($conexion, $sql);

    if ($rta == false){
        echo"No se pudo consultar con la base";
        die();
    } 
        
    $fila = mysqli_fetch_array($rta);
    $nombre = $fila['nombre'];
    $mail = $fila['mail'];
    $admin = $fila['admin'];

    if ($admin == 0) {
        $sql2 = "UPDATE registro SET admin=1 WHERE id=$id";
        $rta = mysqli_query($conexion, $sql2);
        header("location: editar_autores.php?id=$id");
    } else {
        header("location: editar_autores.php?id=$id");
    }
    
?>