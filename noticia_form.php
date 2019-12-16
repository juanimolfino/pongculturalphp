<?php
    session_start();
   
    $id = $_SESSION['user_id'];
  
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
    <script src="https://cdnjs.cloudflare.com/ajax/libs/tinymce/5.0.16/tinymce.min.js"></script>
    <style>
    #contenedor {
        margin-top: 20px;
    }
    h1 {
        margin-left: 30px;
        margin-top:15px;
    }
    .btn-primary {
        margin-top:30px;
        margin-left: 130px;
        width: 150px;
    }
    </style>


<!-- <script>
    
    tinymce.init({
        selector: 'textarea#exampleFormControlTextarea1',
        height: 500,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table paste code help wordcount'
        ],
        toolbar: 'undo redo | formatselect | bold italic backcolor | alignleft aligncenter alignright alignjustify | bullist numlist outdent indent | removeformat | help',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tiny.cloud/css/codepen.min.css'
        ]
    });
</script> -->

</head>
<body>
    
    <h1>Ingrese una nueva noticia:</h1>
    <div class="container" id="contenedor">
        <form enctype="multipart/form-data" action="noticia_bd.php" method="post">
            <div class="form-row">
                <div class="form-group col-md-4">
                <label for="inputEmail4">Título</label>
                <input type="text" class="form-control" id="inputEmail4" placeholder="Título" name="titulo">
                </div>
                <div class="form-group col-md-8">
                <label for="inputPassword4">Sutítulo</label>
                <input type="text" class="form-control" id="inputPassword4" placeholder="Sutítulo" name="subtitulo">
                </div>
            </div>
            <div class="form-group">
            <label for="exampleFormControlTextarea1">Contenido</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" name="contenido"></textarea>
            </div>
           
            <div class="form-group col-md-12">
            <label for="exampleFormControlFile1">Imagenes</label>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_1">
         
            <br>
            <input type="file" class="form-control-file" id="exampleFormControlFile1" name="img_2">
            </div>
            
            <!-- desplegable -->
            

            <select multiple  class="custom-select" name="seccion">
        <?php
            include "configuracion_pongcultural.php";
            $sql = "select * from seccion where activo=1";
            $rta = mysqli_query($conexion, $sql);

            while($fila=mysqli_fetch_array($rta)) {
                $nombreSeccion = $fila['nombre'];
                $idSeccion = $fila['id'];
                    echo "
                        <option value='$idSeccion' >$nombreSeccion</option>
                    ";
            }
        ?>
            </select>
    <br>
    <br>

        <div class="form-row">
            <div class="form-group col-md-12 d-flex justify-content-center">
            <button type="submit" class="btn btn-primary" >Guardar</button>
            </div>
        </div>           
            </form>
    </div>
    
    
    
    
</body>
</html>
<!-- 
<div class="form-group">
                <label for="inputAddress">Address</label>
                <input type="textarea" class="form-control" id="inputAddress" placeholder="1234 Main St">
            </div>
            <div class="form-group">
                <label for="inputAddress2">Address 2</label>
                <input type="text" class="form-control" id="inputAddress2" placeholder="Apartment, studio, or floor">
            </div>
            <div class="form-row">
                <div class="form-group col-md-6">
                <label for="inputCity">City</label>
                <input type="text" class="form-control" id="inputCity">
                </div>
                <div class="form-group col-md-4">
                <label for="inputState">State</label>
                <select id="inputState" class="form-control">
                    <option selected>Choose...</option>
                    <option>...</option>
                </select>
                </div>
               
            </div> -->