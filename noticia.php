<?php
    $id=$_GET['id'];
    /* var_dump($id);
    die(); */
?>

<!DOCTYPE html>
<html lang="es" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="estilosnoticia.css">
    <link rel="stylesheet" href="estiloshome.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    
</head>
<body>

    <!-- NAV -->
    <nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>
                <li class="secciones"><a href="">Música</a></li>
                <li class="secciones"><a href="">Literatura</a></li>
                <li class="secciones"><a href="">Fotografía</a></li>
                <li>
                    <label>
                        <button onClick="mostrarmenu()"></button>
                    </label>
                </li>
            </ul>
        </div>
    </nav>
     <!-- NAV OCULTO -->
     <div id="hamburguesa" class="menu-oculto" >        
        <i class="fa fa-times fa-5x" onClick="ocultarmenu()"></i>
        <div id="contenedor-menu">
            <div class="menu-superior"> 

                <div class="izquierda-20">
                    <div class="brand"><h1>Pong Cultural</h1></div>
                    <div class="ingresar"><h6>Ingresar</h6></div>
                <form action="registro_form.php" method="post">
                    <div class="registrarme"><button type="submit">Registrate</button></div>
                </form>
                   
                </div>

                <div class="medio-40">
                    <div class="mi-cuenta"><h6>Mi cuenta</h6></div>
                    <div class="formulario-menu">
                        <form action="login.php" method="post">
                            <div>
                                <label for="email">Email:</label>
                                <input id="email" type="email" name="mail">
                                <br>
                                <label for="password">Password:</label>
                                <input id="password" type="password" name="password" pattern=".{1,10}" required title="Password must be between 5 and 10 characters">
                            </div>
                            
                            <div class="boton-login">
                                <input type="checkbox" name="Agree" required=""> <span>Acepto T&C</span> 
                                <br>
                                <button class="boton-ingresar-cuenta" type="submit">Ingresar</button>
                            </div>
                        </form>
                    </div>
                </div>

                <div class="derecha-40">
                    <div class="contenedor-mas-contenido">
                        <div class="menu-principal"><h6>Menu principal</h6></div>
                        <div class="conocenos"><a href=""><h3>Conocenos</h3></a></div>
                        <div class="contacto"><a href=""><h3>Contacto</h3></a></div>
                        <div class="mas"><a href=""><h3>Más</h3></a></div>
                    </div>    
                </div>

            </div>
            <div class="footer-menu">
                <ul>
                    <li><a href="#spinetta">Música</a></li>
                    <li><a href="#borges">Literatura</a></li>
                    <li><a href="#papa">Fotografía</a></li>
                </ul>
            </div> 
        </div>     
    </div>
    <!-- FIN - NAV OCULTO -->

<!-- CONTENEDOR DE LO PRINCIPAL -->
    <main class="contenedor-noticia">

<!-- PHP NOTICIA -->
<?php
     include "configuracion_pongcultural.php";
    $sql = "select * from noticia where id=$id";
    $rta = mysqli_query($conexion, $sql);
?>

<?php
    $fila = mysqli_fetch_array($rta);
?>

    <!-- BLOQUE SUPERIOR DE LA NOTICA -->
        <section class="bloque-superior">
            <div class="seccion-fecha">
                <div class="seccion">
                    <a href=""><h2>Música</h2></a>
                </div>
            
                <div class="fecha">
                    <h2><?php    
                                echo $fila['fecha'];                                       
                                ?></h2>
                </div>
            </div>


            <div class="titulo-noticia-individual">
                <h3>
                    <?php
                        echo $fila['titulo'];
                    ?>
                </h3>
            </div>

            <div class="img-subtitulo">
                <div class="subtitulo-noticia-individual">
                    <p>
                                <?php    
                                echo $fila['subtitulo'];                                       
                                ?>
                    </p>
                    <div class="boton-conocer">
                            <button><i class="fa fa-share-alt fa-2x"></i></button>
                            <div class="invisible"></div>
                    </div> 
                </div>

                <div class="img-noticia-individual">
                    <img class="img-noticia-main" width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                </div>
            </div>
        </section>
    <!-- FIN - BLOQUE SUPERIOR DE LA NOTICA -->



    <!-- BLOQUE INFERIOR DE LA NOTICA -->
        <section class="bloque-inferior">
            <div class="contenedor-texto">
                <div class="texto-1">
                    <p class="parrafo-noticia"><?php echo $fila['contenido']; ?></p>
                </div>
                <!-- <div class="imagen-texto-1">
                        <iframe width="560" height="315" src="https://www.youtube.com/embed/QEX7OVvUf_I" 
                        frameborder="0" allow="accelerometer; autoplay; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                </div> -->
               <!--  <div class="texto-2">
                        <p class="parrafo-noticia">El capítulo no sólo mostrará la vida y obra del intérprete de la inolvidable melodía de "Muchacha ojos de papel", sino que también buscará descubrir el costado desconocido de la persona detrás del cantante: "El lado humano de un genio", se anuncia en el adelanto. Se verán por primera vez imágenes del referente musical junto a su familia, en su intimidad hogareña, y material exclusivo de grabaciones pocas veces vistas.
                                El episodio estará presentado por una de las hijas del músico, Catarina Spinetta, quien expresó su felicidad por esta nueva propuesta: "Me llena de orgullo y confianza que National Geographic realice este documental dedicado a mi padre. Me encuentro personalmente comprometida con este proyecto, desde el amor y el respeto, para que su inmensa obra y arte queden plasmados en esta gran producción".
                        </p>
                </div> -->
                <div class="imagen-texto-2">
                   
                        <img class="img-noticia-texto-2" width="100%" src="<?php echo $fila['img_2']; ?>" alt="<?php $fila['titulo']; ?>">
                </div>
                <!-- <div class="texto-3">
                        <p class="parrafo-noticia">En el adelanto del documental, Vera Spinetta, la hija menor del compositor, confiesa que no solía escuchar la música de su padre y que, en su lugar, prefería la de Charly, hasta que escuchó por primera vez El jardín de los presentes [de Invisible, grabado en 1976]: "Era lo más lindo que había escuchado en mi vida.Y era mi papá el que cantaba", relata conmovida.

                                A siete años de la muerte de Luis Alberto, llega este documental con fotos y videos inéditos, muy esperados por todos los que atesoran las canciones de uno de los referentes argentinos más significativos de la escena rockera local. Es tal su importancia cultural que, en 2014, se estableció por ley que el día de su nacimiento -23 de enero- fuera instituido como el Día Nacional del Músico en Argentina.</p>
                </div> -->
            </div>
        </section>
    <!-- BLOQUE INFERIOR DE LA NOTICA -->




    </main>
<!-- FIN - CONTENEDOR DE LO PRINCIPAL -->
<br>
<br>
<hr>
    <footer>
        
        <div class="foot-div-1">
          
                <h3>Links Rapidos</h3>
                <ul>
                    <li><a href="#">Log In</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="">Send a Note</a></li>
                </ul>
        </div>
            
        <div class="foot-div-2">
                <h3>Redes</h3>
                <ul>
                    <li><a href="#">facebook</a></li>
                    <li><a href="#">Instagram</a></li>
                    <li><a href="#">Twiter</a></li>
                </ul>
        </div>

        <div class="foot-div-3">
               
            
            
        </div>

        <div class="foot-div-4">
            <h3>Newslatter</h3>
            <div>
                    <input type="text" placeholder="Email adress" name="mail" required>
                    <input class="boton-submit" type="submit" value="subscribe">
            </div>
           
        </div>


    </footer>


    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    <script src="jshome.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>
<script>
    new TypeIt('.subtitulo', {
  strings: "Magia y Surrealismo fotógrafico"
}).go(); 
</script>
   
   

</body>
</html>