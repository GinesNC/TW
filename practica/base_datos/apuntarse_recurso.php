<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $nombre=$_POST['nombre'];
            $dni=$_POST['dni'];
            $codigo_correccion=$_POST['id_correccion'];
            $correo=$_POST['correo'];
            $priv_admin=$_POST['priv_admin'];
            $user=$_POST['user'];
            $passwd=$_POST['passwd'];
            $codigo_usuario=$_POST['codigo_usuario'];

            //nombre es el codgi del recurso creado
            mysqli_query($link,"INSERT INTO $nombre VALUES ('$nombre', '$apellidos', '$dni', '$correo', $priv_admin, '$user', '$passwd', '$codigo_usuario')") or die ("Error al dar de alta al usuario!!");

            echo '<h2> Registro completo </h2> <a href="/TW/practica/index.html">Volver a la pagina de inicio.</a>'
            ;

        ?>
