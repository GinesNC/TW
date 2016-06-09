<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $nombreRecurso=$_POST['nombreRecurso'];
            $fecha=$_POST['fecha'];
            $hora_inicio=$_POST['hinicio'];
            $hora_fin=$_POST['hfin'];
            $desp=$_POST['despacho'];
            $id="AAAAA";

            
            mysqli_query($link,"CREATE TABLE $nombreRecurso(nombre varchar(30), dni varchar(9))") or die ("<h2>Error......</h2>");

            mysqli_query($link,"INSERT INTO recursos_activos VALUES ('$nombreRecurso', '$fecha', '$hora_inicio', '$hora_fin', '$id','$desp')") or die ("Error al insertar recurso");
            echo '<h2> Registro completo </h2> <a href="index.html">inicio</a>';
            $link->close();
        ?>
