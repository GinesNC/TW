<?php
    session_start();

        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $dni=$_POST['dni'];
            $correo=$_POST['correo'];

            $user=$_POST['user'];
            $passwd1=$_POST['pass1'];
            $passwd2=$_POST['pass2'];
            if($_SESSION['priv_admin']){
              $id=$_POST['id'];
              $priv_admin=$_POST['priv_admin'];
            }
            else{
              $id=$_SESSION['id'];
              $priv_admin=$_SESSION['priv_admin'];
            }

            if(strnatcasecmp ($passwd1,$passwd2)==0)
              $contrasena=$passwd1;



          mysqli_query($link," UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',dni='$dni', correo='$correo',priv_admin='$priv_admin', user='$user', passwd='$contrasena' WHERE id='$id'") or die ("Error al modificar!!");

            echo '<h2> Registro completo </h2> <a href="index.php?secc=index">Volver a la pagina de inicio.</a>';

        ?>
