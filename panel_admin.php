<?php
    session_start();
  if (!isset($_SESSION['user_id'])){
    header("location: login_form.php");
  }
    $id = $_SESSION['user_id'];
    $admin = $_SESSION['user_admin'];

    if ($admin == 0) {
        header("location: panel_autor.php");
    }

    include "configuracion_pongcultural.php";
    $sql = "select * from registro where id=$id";
    $rta = mysqli_query($conexion, $sql);
    if ($rta == false) {
        echo "No se pudo realizar el borrado";
    }
    $fila = mysqli_fetch_array($rta);
    $nombre = $fila['nombre'];
    $id = $fila['id'];    

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css?family=Roboto:400,700&display=swap" rel="stylesheet">
    <style>
        #formulario {
            margin-top: 50px;
        }
        h1 {
            
            padding: 0;
            margin-bottom: 30px;
            font-size: 2em;
            font-family: Roboto;
        }
        .btn {
            width: 190px;
            /* height: 80px; */
        }
        
    </style>
</head>
<body>

<div class="container" id="formulario">
    <div class="jumbotron">
        <h1>Bienvenid@ <?php echo $nombre ?></h1>
         
            <div class="col-sm-12 d-flex justify-content-around">
            <a href="lista_noticias.php" class="btn btn-success">Bajar noticia</a>
            <a href="lista_autores.php" class="btn btn-dark">Lista autores</a>
            <a href="log_out.php" class="btn btn-danger">Log out</a>
            </div>
           
    </div>
</div>

</body>
</html> 