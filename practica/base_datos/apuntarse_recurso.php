<?php
error_reporting( error_reporting() & ~E_NOTICE );
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $recurso=$_POST['nombreRecurso'];
            $dni=$_POST['dni'];
            $nombre=$_POST['nombre'];
            $codigo_cliente="aaaaaa";
            $time = time();
            $time = date("H:i:s", $time);
            $time="18:00:00";
            //recurso es el codgi del recurso creado
            $sql="SELECT * from $recurso WHERE dni='$dni'";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
                echo '<div style="text-align:center">
                <h2> ERROR: El alumno ya se ha apuntado al recurso </h2> <a href="../index.php?secc=index">Volver a la pagina anterior.</a></div>';
              }
            else{
              mysqli_query($link,"INSERT INTO $recurso VALUES ('$nombre', '$dni','$codigo_cliente','$time'") or die ("ERRORRR");
               echo '<div style="text-align:center">
              <h2> Registro completado </h2> <a href="../index.php?secc=exitoApuntarse">Ver codigo usuario</a></div>';
            }



        ?>
