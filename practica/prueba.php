<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"prueba") or die ("<h2>Error de conexion</h2>");

            $usuario=$_POST['nombreUsuario'];
            $contraseña=$_POST['contrasena'];
            $dni=$_POST['dni'];

            mysqli_query($link,"INSERT INTO prueba VALUES('$usuario','$contraseña','$dni')") or die ("<h2>Error......</h2>");

            echo '<h2> Registro completo </h2> <a href="login.html">Login</a>'
            ;

        ?>
