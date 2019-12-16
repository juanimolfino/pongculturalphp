<?php
        if (!empty($_POST)) {
        $usuario = $_POST['username'];
        $mail = $_POST['mail'];
        $password = $_POST['password'];
      
        $password_encriptada = password_hash($password, PASSWORD_BCRYPT);
    
       
        if ($usuario=="" || $mail=="" || $password=="") {
            echo "Es necesario completar todos los campos";
            die();
            
        } /* caracteres, cantidad, tipo, comparar contra base y avisar que ya existe */
    
        include "configuracion_pongcultural.php";
        $sql = "insert into registro (nombre, mail, pass, activo, admin) values ('$usuario', '$mail', '$password_encriptada', 1, 0)";
        $respuesta = mysqli_query($conexion, $sql);
    
        if ($respuesta==false) {
            echo "No se pudo registrar por un error en la base";
        } else {
            header ("location: login_form.php");
        }
    }
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
            margin: 0;
            padding: 0;
            margin-bottom: 30px;
            font-size: 2em;
            font-family: Roboto;
        }
    </style>
</head>
<body>

<div class="container" class="d-flex justify-content-center" id="formulario">
    <div class="jumbotron">
    <h1>Registrate en Pong Cultural y subi tus noticias!</h1>
        <form method="post">
        <div class="form-row">
            <div class="form-group col-md-6">
            <label for="inputEmail4">Nombre de usuario</label>
            <input type="text" class="form-control" id="inputEmail4" name="username">
            </div>
            <div class="form-group col-md-6">
            <label for="inputPassword4">Contraseña</label>
            <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
            <div class="form-group col-md-12">
            <label for="inputAddress">Correo electronico</label>
            <input type="text" class="form-control" id="inputAddress" name="mail">
            </div>
        </div>
        <button type="submit" class="btn btn-primary">Registrarse</button>
        </form>
    </div>
</div>



        
    </form>
</body>
</html>