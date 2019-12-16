<?php

    session_start();
    $id_autor = $_SESSION['user_id'];

$titulo = $_POST['titulo'];
$subtitulo = $_POST['subtitulo'];
$contenido = $_POST['contenido'];
$seccion = $_POST['seccion'];

date_default_timezone_set('America/Argentina/Buenos_Aires');
$fecha = date("Y/m/d h:i:s");


/* echo "<pre>";
print_r($_POST);
var_dump($id_autor);
echo "</pre>";
die(); */


$dir_subida = 'imagenes/'; 
if(isset($_FILES['img_1'])) {
    $destino = $dir_subida . basename($_FILES['img_1']['name']);
    if (move_uploaded_file($_FILES['img_1']['tmp_name'], $destino)) {    
     $img_1 = $destino;
    } else {    
    echo "No se pudo subir el archivo IMG 1"; 
}
}

if($_FILES['img_2']['name'] !== "") {
$destino2 = $dir_subida . basename($_FILES['img_2']['name']);
if (move_uploaded_file($_FILES['img_2']['tmp_name'], $destino2)) {    
    $img_2 = $destino2;
} else {    
    echo "No se pudo subir el archivo IMG 2"; 
}
}



if ($titulo == "" || $subtitulo == "" || $contenido == "" || $seccion == "" || $fecha == "" || $img_1 == "") {
    die("Debe completar todos los campos");
}




include "configuracion_pongcultural.php";
$sql = "INSERT INTO noticia (titulo, subtitulo, contenido, img_1, img_2, fecha, autor, seccion, activo, vistos) VALUES ('$titulo', '$subtitulo', '$contenido', '$img_1', '$img_2', '$fecha', $id_autor, $seccion, 1, 0)";
/* echo $sql;
die(); */
$rta = mysqli_query($conexion, $sql);

if ($rta == false) {
    echo mysqli_error($conexion);

   
 } else {
     header ("location: panel_autor.php");
 }




?>