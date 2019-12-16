<?php
     session_start();
     if (!isset($_SESSION['user_id'])){
       header("location: login_form.php");
     }
       $id = $_SESSION['user_id'];
       $admin = $_SESSION['user_admin'];
   
       if ($admin == 0) {
           header("location: login_form.php");
       }
?>

<?php
    $id = $_GET['id'];

    include "configuracion_pongcultural.php";
    $sql = "update registro set activo=0 where id=$id";
    $rta = mysqli_query($conexion, $sql);
    if ($rta == false) {
        echo "No se pudo realizar el borrado";
    } else {
        header ("location: lista_autores.php");
    }

?>