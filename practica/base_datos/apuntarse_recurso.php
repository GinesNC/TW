<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $recurso=$_POST['nombreRecurso'];
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];

            //nombre es el codgi del recurso creado
            mysqli_query($link,"INSERT INTO $recurso VALUES ('$nombre', '$dni')") or die ("Error al apuntarse al recurso!!");

            echo '<h2> Registro completo </h2> <a href="/TW/practica/index.html">Volver a la pagina de inicio.</a>'
            ;

        ?>
