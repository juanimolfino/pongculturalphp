<?php
     $id = $_GET['id'];
    session_start();
    if (!isset($_SESSION['user_id'])){
      header("location: login_form.php");
    }
      
      $admin = $_SESSION['user_admin'];
  
      if ($admin == 0) {
          header("location: login_form.php");
      }



   

    include "configuracion_pongcultural.php";
    $sql = "update noticia set activo=0 where id=$id";
    $rta = mysqli_query($conexion, $sql);
    if ($rta == false) {
        echo "No se pudo realizar el borrado";
    } else {
        header ("location: lista_noticias.php");
    }

?>