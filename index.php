<!DOCTYPE html>
<html lang="es" id="html">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Pong Cultural</title>
    <link rel="stylesheet" href="estiloshome.css">
    <link rel="stylesheet" href="animate.css">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="https://unpkg.com/aos@next/dist/aos.css" />
    <script src="jshome.js"></script>
     
</head>
<body> 
  
    <!-- BARRA NAVEGACION - JUANI -->
    <nav>
        <div>
            <ul>
                <li><a href="index.php"><b>Pong Cultural</b></a></li>
                <li class="secciones"><a href="#spinetta">Música</a></li>
                <li class="secciones"><a href="#borges">Literatura</a></li>
                <li class="secciones"><a href="#papa">Fotografía</a></li>
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
    <!-- FIN BARRA NAVEGACION -->


    <!-- HEADER / BANNER - MARIETTA -->
    <header>
        <div class="m_containerheader">
    
            <div class="m_caja1izq_containerheader">
                <h2 class="bloque1">0.4</h2>
                <h3 class="bloque2">
                    Al primer signo de juego o de truco
                    en una narración, sea trivial o
                    elaborado, cierro el libro.
                </h3>
                <h4 class="bloque3">Raymond Carver</h4>
            </div>
    
            <div class="m_bochadecajas">
                <div class="m_containerarriba">
                    <div class="m_caja2izq_containerheader">
                            <h2 class="mtextocerati">
                            #SEGUIR
                            <br> VIVIENDO
                            <br> SIN TU AMOR.</h2>
                    </div>
    
                    <div class="m_caja4_containerheader">
                        <h2 class="mtextoleguas">
                        20.000
                        <br>leguas
                        <br>de
                        <br>viaje
                        <br>submarino.</h2>
                    </div>
    
                    <div class="m_caja5dere_containerheader">
                        <h2 class="mbeatles">beatles.</h2> 
                    </div>
                </div>
    
                <div class="m_containerabajo">
    
                    <div class="m_caja3izq_containerheader">
                            <h2 class="mbienvenidos">*bienvenidos*</h2>
                            <img class="gatito" src="imagenes/logopongweb.jpg" alt="logo-cultural">
                    </div>
    
                    <div class="m_caja6dere_containerheader">
                            <h2 class="mtextoanita">ANNABERKOZ / #fantástico.</h2>
                    </div>
                </div>
            </div>
        </div>
    </header>
    <!-- FIN HEADER / BANNER -->

    <!-- MAIN CON SECCIONES Y ARTICULOS -->
    <main>
    <!-- SECCION MUSICA -->

    <?php
            include "configuracion_pongcultural.php";
        
            $sql = "select * from seccion where id=3";

                  
            $rta = mysqli_query($conexion, $sql);
            $fila = mysqli_fetch_array($rta);
            
    ?>

            <section>
                <div class="contenedor-musica">

                    <div class="bloque">
                        <article class="sesenta">
                            <div class="titulo"  data-aos="fade-up"><h1 id="spinetta"><?php echo $fila['nombre']; ?></h1></div>
                            <div class="contenedor-comentario">                 
                                <div class="comentario">
                                    <p>"El mensaje es ese, cuidá al que tenes al lado. Es tu amigo, puede ser tu hermano, tu novia... lo que sea pero cuidá, cuidá la vida."</p>
                                    <p class="by">-- Luis Alberto Spinetta</p>
                                </div>  
                            </div>

                            <div class="boton-conocer" data-aos="fade-left"
                            data-aos-anchor="#example-anchor"
                            data-aos-offset="500"
                            data-aos-duration="1000">
                                <button>Conocer más</button>
                                <div class="invisible"></div>
                            </div>                
                        </article>
                        

        <?php
        
          
            $sql = "select * from noticia where seccion=3 and activo=1
            order by fecha desc 
            limit 3";

                  
            $rta = mysqli_query($conexion, $sql);
            $fila = mysqli_fetch_array($rta);
            
        ?>



                        <article class="cuarenta">
                            <div class="imagen-noticia">
                                <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                            </div>
                            <div class="info-noticia">    
                                <div>
                                    <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia">
                                                    <?php    
                                                        echo $fila['titulo'];                                       
                                                     ?>
                                    </p></a>                                
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                                    <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    
                    <?php
                        $fila = mysqli_fetch_array($rta);
                            
                  ?>


                    <div class="bloque">    
                        <article class="cuarenta">
                            <div class="imagen-noticia">
                                <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                            </div>
                            <div class="info-noticia">    
                                <div> 
                                    <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia" data-aos="fade-right">
                                                    <?php    
                                                        echo $fila['titulo'];                                         
                                                     ?>
                                    </p></a>
                                    
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                                    <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                        
                        <?php
                        $fila = mysqli_fetch_array($rta);
                            
                         ?>         
                        <article class="sesenta">
                            <div class="noticia-sesenta">
                                <div class="imagen-noticia">
                                    <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                                </div>
                                <div class="info-noticia">    
                                    <div>
                                        <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia" data-aos="fade-left">
                                                     <?php    
                                                        echo $fila['titulo'];                                         
                                                     ?>
                                        </p></a>
                                    </div>
                                    <div>
                                        <p class="extra-noticia">
                                                     <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>            
            </section>

            
    <!-- FIN MUSICA -->
    

    <!-- SECCION FOTOGRAFIA -->

    <?php
            
            $sql = "select * from seccion where id=1";

                  
            $rta = mysqli_query($conexion, $sql);
            $fila = mysqli_fetch_array($rta);
            
        ?>
    <!-- CIERRO PHP -->

            <section>
                <div class="contenedor-musica">

                    <div class="bloque">
                        <article class="sesenta">
                            <div class="titulo"  data-aos="fade-up"><h1 id="papa"><?php echo $fila['nombre']; ?></h1></div>
                            <div class="contenedor-comentario">                 
                                <div class="comentario">
                                    <p>PONER MENSAJE DE FOTOGRAFIA</p>
                                    <p class="by">AUTOR DEL MENSAJE</p>
                                </div>  
                            </div>

                            <div class="boton-conocer" data-aos="fade-left"
                            data-aos-anchor="#example-anchor"
                            data-aos-offset="500"
                            data-aos-duration="1000">
                                <button>Conocer más</button>
                                <div class="invisible"></div>
                            </div>                
                        </article>
                        

        <?php
        
          
            $sql = "select * from noticia where seccion=1 and activo=1
            order by fecha desc 
            limit 3";

                  
            $rta = mysqli_query($conexion, $sql);
            $fila = mysqli_fetch_array($rta);
            
        ?>



                        <article class="cuarenta">
                            <div class="imagen-noticia">
                                <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                            </div>
                            <div class="info-noticia">    
                                <div>
                                    <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia">
                                                    <?php    
                                                        echo $fila['titulo'];                                       
                                                     ?>
                                    </p></a>                                
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                                    <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    
                    <?php
                        $fila = mysqli_fetch_array($rta);
                            
                  ?>


                    <div class="bloque">    
                        <article class="cuarenta">
                            <div class="imagen-noticia">
                                <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                            </div>
                            <div class="info-noticia">    
                                <div> 
                                    <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia" data-aos="fade-right">
                                                    <?php    
                                                        echo $fila['titulo'];                                         
                                                     ?>
                                    </p></a>
                                    
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                                    <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                        
                        <?php
                        $fila = mysqli_fetch_array($rta);
                            
                         ?>         
                        <article class="sesenta">
                            <div class="noticia-sesenta">
                                <div class="imagen-noticia">
                                    <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                                </div>
                                <div class="info-noticia">    
                                    <div>
                                        <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia" data-aos="fade-left">
                                                     <?php    
                                                        echo $fila['titulo'];                                         
                                                     ?>
                                        </p></a>
                                    </div>
                                    <div>
                                        <p class="extra-noticia">
                                                     <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>            
            </section>


    <!-- SECCION LITERATURA -->

    <?php
            
            $sql = "select * from seccion where id=2";

                  
            $rta = mysqli_query($conexion, $sql);
            $fila = mysqli_fetch_array($rta);
            
        ?>
    <!-- CIERRO PHP -->

            <section>
                <div class="contenedor-musica">

                    <div class="bloque">
                        <article class="sesenta">
                            <div class="titulo"  data-aos="fade-up"><h1 id="borges"><?php echo $fila['nombre']; ?></h1></div>
                            <div class="contenedor-comentario">                 
                                <div class="comentario">
                                    <p>PONER MENSAJE DE FOTOGRAFIA</p>
                                    <p class="by">AUTOR DEL MENSAJE</p>
                                </div>  
                            </div>

                            <div class="boton-conocer" data-aos="fade-left"
                            data-aos-anchor="#example-anchor"
                            data-aos-offset="500"
                            data-aos-duration="1000">
                                <button>Conocer más</button>
                                <div class="invisible"></div>
                            </div>                
                        </article>
                        

        <?php
        
          
            $sql = "select * from noticia where seccion=2 and activo=1
            order by fecha desc 
            limit 3";

                  
            $rta = mysqli_query($conexion, $sql);
            $fila = mysqli_fetch_array($rta);
            
        ?>
                        <article class="cuarenta">
                            <div class="imagen-noticia">
                                <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                            </div>
                            <div class="info-noticia">    
                                <div>
                                    <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia">
                                                    <?php    
                                                        echo $fila['titulo'];                                       
                                                     ?>
                                    </p></a>                                
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                                    <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                    </div>
                    
                    
                    <?php
                        $fila = mysqli_fetch_array($rta);
                            
                  ?>


                    <div class="bloque">    
                        <article class="cuarenta">
                            <div class="imagen-noticia">
                                <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                            </div>
                            <div class="info-noticia">    
                                <div> 
                                    <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia" data-aos="fade-right">
                                                    <?php    
                                                        echo $fila['titulo'];                                         
                                                     ?>
                                    </p></a>
                                    
                                </div>
                                <div>
                                    <p class="extra-noticia">
                                                    <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                    </p>
                                </div>
                            </div>
                        </article>
                        
                        <?php
                        $fila = mysqli_fetch_array($rta);
                            
                         ?>         
                        <article class="sesenta">
                            <div class="noticia-sesenta">
                                <div class="imagen-noticia">
                                    <img width="100%" src="<?php echo $fila['img_1']; ?>" alt="<?php $fila['titulo']; ?>">
                                </div>
                                <div class="info-noticia">    
                                    <div>
                                        <a href="noticia.php?id=<?php echo $fila['id']; ?>"><p class="titulo-noticia" data-aos="fade-left">
                                                     <?php    
                                                        echo $fila['titulo'];                                         
                                                     ?>
                                        </p></a>
                                    </div>
                                    <div>
                                        <p class="extra-noticia">
                                                     <?php    
                                                        echo $fila['subtitulo'];                                       
                                                     ?>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </article>
                    </div>
                </div>            
            </section>

    </main>


<!-- FIN SECCIONES -->



<!-- FOOTER -->
<br>
<br>
<hr>
    <footer>
        <div class="foot-div-1">
                <h3>Links Rapidos</h3>
                <ul>
                    <li><a href="login_form.php">Log In</a></li>
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
            <h3>Newsletter</h3>
        <form action="registro_form.php" method="post">
            <div>
                    <h3 >Registrate y subi tus noticias!</h3>
                    <input class="boton-submit" type="submit" value="subscribe" id="registrate">
            </div>
         </form>
        </div>


    </footer>
<!-- FIN FOOTER -->

<!-- SCRIPTS -->
    <script src="js/wow.min.js"></script>
    <script>new WOW().init();</script>
    <script src="https://unpkg.com/aos@next/dist/aos.js"></script>
    <script>AOS.init();</script>
    
    <script src="https://cdn.jsdelivr.net/npm/typeit@6.0.3/dist/typeit.min.js"></script>
    <script>
        new TypeIt('.subtitulo', {
    strings: "Magia y Surrealismo fotógrafico"
    }).go(); 
    </script>
 


</body>
</html>