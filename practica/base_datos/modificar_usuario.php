<?php


        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $dni=$_POST['dni'];
            $correo=$_POST['correo'];
            $priv_admin=$_POST['priv_admin'];
            $user=$_POST['user'];
            $passwd=$_POST['pass'];
            $id=$_POST['id'];

          mysqli_query($link," UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',dni='$dni', correo='$correo, user='$user',passwd='$passwd' WHERE id='$id'") or die ("Error al modificar!!");

            echo '<h2> Registro completo </h2> <a href="/TW/practica/index.html">Volver a la pagina de inicio.</a>'
            ;

        ?>
