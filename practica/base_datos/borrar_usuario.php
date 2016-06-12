<?php


        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $id=$_POST['id'];

            //delete from
          mysqli_query($link," DELETE FROM usuarios WHERE nombre='$id ") or die ("Error al dar de alta al usuario!!");

            echo '<h2> Registro completo </h2> <a href="/TW/practica/index.html">Volver a la pagina de inicio.</a>'
            ;

        ?>
