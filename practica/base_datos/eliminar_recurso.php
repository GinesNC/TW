<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $usuario=$_POST['nombreUsuario'];


            //hacer comprobacion de si existe o no los datos

            mysqli_query($link,"DROP TABLE $usuario") or die ("<h2>Error......</h2>");


            mysqli_query($link,"DELETE FROM recursos_activos WHERE nombre='$usuario'") or die ("<h2>Error..2....</h2>");

            echo '<h2> Registro completo </h2> <a href="index.php?secc=index'">Login</a>'
            ;

        ?>
