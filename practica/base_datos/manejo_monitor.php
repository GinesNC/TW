<?php
        //conexión base de datos.
        $link = mysqli_connect("localhost","ejercicio_pw","pass_ejercicio_pw") or die("<h2>No se encuentra el servidor</h2>");
        $db=mysqli_select_db($link,"75932436y") or die ("<h2>Error de conexion</h2>");
            $usuario=$_POST['nombreUsuario'];
            $siguiente=$_POST['siguiente'];
            $espera=$_POST['En_espera'];
            $atencion=$_POST['En_atencion'];
            $inicio=$_POST['inicio'];


            if($siguiente)
              mysqli_query($link," ") or die ("<h2>Error......</h2>");
            echo '<h2> Registro completo </h2> <a href="login.html">Login</a>'
            ;

        ?>
