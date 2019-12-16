<?php 
   /*  $id = $_GET['id']; */
   session_start();

  /*   var_dump($_SESSION);
    die(); */
    $id = $_SESSION['user_id'];

    

    include "configuracion_pongcultural.php";
    $sql = "select * from registro where id=$id";
    $rta = mysqli_query($conexion, $sql);

    if($rta == false) {
        echo $sql;
        echo mysqli_error($conexion);
        die("no colsulto BD");
    }

    $fila = mysqli_fetch_array($rta); 
    $nombre = $fila['nombre'];
    $mail = $fila['mail'];
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
     
        h1 {
            margin-top: 70px;
            margin-bottom: 50px;
            margin-left: 30px;
            padding: 0;
            margin-bottom: 30px;
            font-size: 2em;
            font-family: Roboto;
        }
    </style>
</head>
<body>




<h1> Bienvenid@ <?php echo $nombre ?> </h1>

        <div class="container" class="d-flex justify-content-center" id="tabla">

            <table class="table">
            <thead>
                <tr>
                <th scope="col">#Id</th>
                <th scope="col">Nombre</th>
                <th scope="col">Mail</th>
                <th scope="col"></th>
                
                </tr>
            </thead>
            <tbody>
    <?php

                echo "<tr>
                <td scope='col'>#$id</td>
                <td>$nombre</td>
                <td>$mail</td>
                <td><a href='editar_autores.php?id=$id' class='btn btn-outline-secondary'>Editar</a></td>
                </tr>";    
    ?>
</body>
</html>



