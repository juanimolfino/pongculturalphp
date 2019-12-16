<?php
      $id = $_GET['id'];
  session_start();
  
  if (!isset($_SESSION['user_id'])){
       header("location: login_form.php");
     }
       
       $id_user = $_SESSION['user_admin'];
   
  
  if (!empty($_POST)) {
    $nuevoNombre = $_POST['name'];
    $nuevoMail = $_POST['mail'];

    include "configuracion_pongcultural.php";
    $sql = "UPDATE registro SET nombre='$nuevoNombre', mail='$nuevoMail' WHERE id=$id";
    $rta = mysqli_query($conexion, $sql);
    
  if ($id_user == 1){
        header ("location: panel_admin.php");
    } else {
      header ("location: panel_autor.php");
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

        .btn {
          width: 220px;
        }
    </style>
</head>
<body>
    <?php
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
         
    ?>

<div class="container" class="d-flex justify-content-center" id="formulario">
<div class="jumbotron">
<h1>Editar autores:</h1>
 <form method="post">
    
    <div class="form-group row">
    <label for="inputEmail3" class="col-sm-2 col-form-label">Nombre de usuario</label>
    <div class="col-sm-10">
      <input type="text" class="form-control" id="inputEmail3" name="name" value="<?php echo "$nombre"; ?>">
    </div>
  </div>

  <div class="form-group row">
    <label for="inputPassword3" class="col-sm-2 col-form-label">Correo electronico</label>
    <div class="col-sm-10">
      <input type="mail" class="form-control" id="inputPassword3" name="mail" value="<?php echo "$mail"; ?>">
    </div>
  </div>
        <br>
        
      
    <div class="form-group col-sm-12 row d-flex justify-content-around">
   
<?php if ($_SESSION['user_admin']==1) { ?>
    <a href='cambiar_a_admin.php?id=<?php echo "$id"; ?>' class="btn btn-danger">Permisos de administrador</a>
    <a href="cambiar_a_autor.php?id=<?php echo "$id"; ?>" class="btn btn-success">Permisos de autor</a>
<?php } ?>
    
    
    <button type="submit" class="btn btn-primary">Guardar</button>
   
    </div>

<!-- class="col-sm-6 d-flex justify-content-center" -->

 </form> 
 </div>
 </div>




</body>
</html>

