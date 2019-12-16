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

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">

    <style>
        #tabla {
            margin-top: 50px;
        }
        h1 {
            margin-left: 20px;
            margin-top: 20px;
            display: block;
        }
    </style>

    <script>
        function borrar(id) {
            Swal.fire({
            title: 'Are you sure?',
            text: "You won't be able to revert this!",
            icon: 'warning',
            showCancelButton: true,
            confirmButtonColor: '#3085d6',
            cancelButtonColor: '#d33',
            confirmButtonText: 'Yes, delete it!'
            }).then((result) => {
            if (result.value) {
                Swal.fire(
                'Deleted!',
                'Your file has been deleted.',
                'success'
                            )
                window.location="borrar_noticia.php?id="+id;
                } 
            })
            return false;
        }
    </script>

</head>
<body>
<?php /* Conexion con BD */

    $filtro = '';
    if (isset($_GET['filtro'])) {
        $filtro = $_GET['filtro'];
    }
    include "configuracion_pongcultural.php";
    $sql = "SELECT registro.nombre as autor, noticia.titulo, noticia.fecha, noticia.id, noticia.activo FROM noticia LEFT JOIN registro ON registro.id = noticia.autor where noticia.activo=1 and noticia.titulo like '%$filtro%' or registro.nombre like '%$filtro%'";
    $rta = mysqli_query($conexion, $sql);
?> 
<h1>Listado de noticias:</h1>



<div class="container" class="d-flex justify-content-center" id="tabla">


<form class="form-inline" action="lista_noticias.php" method="GET">
  <div class="form-group mb-2">
    <label for="staticEmail2" class="sr-only"></label>
    <input type="text" readonly class="form-control-plaintext" id="staticEmail2" value="Buscar:">
  </div>
  <div class="form-group mx-sm-3 mb-2">
    <label for="inputPassword2" class="sr-only"></label>
    <input type="text" class="form-control" id="inputPassword2" name="filtro">
  </div>
  <button type="submit" class="btn btn-primary mb-2">Ir</button>
  </form>
  
  <br>



    <table class="table">
    <thead class="thead-dark">
        <tr>
        <th scope="col">Titulo</th>
        <th scope="col">autor</th>
        <th scope="col">fecha de carga</th>
        <th scope="col"></th>
      
        </tr>
    </thead>
    <tbody>
        <?php
            while ($fila = mysqli_fetch_array($rta)) {
                $id = $fila['id'];
                $titulo = $fila['titulo'];
                $autor = $fila['autor'];
                $fecha = $fila['fecha'];
                $activo = $fila['activo'];

                    echo "<tr>
                    <th scope='col'>$titulo</th>
                    <td>$autor</td>
                    <td>$fecha</td>
                    <td><a href='borrar_noticia.php?id=$id' class='btn btn-outline-danger' onclick='return borrar($id)'>Borrar</a></td>
                    
                    </tr>";
                   

            }
        ?>
    </tbody>
    </table>

</div>









<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
</body>
</html>