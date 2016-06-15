<?php
    session_start();

        //conexión base de datos.
        $link = mysqli_connect("localhost","ejercicio_pw","pass_ejercicio_pw") or die("<h2>No se encuentra el servidor</h2>");
        $db=mysqli_select_db($link,"75932436y") or die ("<h2>Error de conexion</h2>");
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


              $sql="SELECT * from usuarios WHERE id='$id'";
              $result = $link->query($sql);
              if ($result->num_rows > 0) {
                mysqli_query($link," UPDATE usuarios SET nombre='$nombre',apellidos='$apellidos',dni='$dni', correo='$correo',priv_admin='$priv_admin', user='$user', passwd='$contrasena' WHERE id='$id'");
                  echo '<div style="text-align:center">
                  <h2> Modificado con éxito </h2> <a href="../index.php?secc=modificarDatos">Volver a la pagina anterior.</a></div>';
                }
              else echo '<div style="text-align:center">
                <h2> Error al modificar datos, no existe el usuario. </h2> <a href="../index.php?secc=modificarDatos">Volver a la pagina anterior.</a></div>';

                $link->close();

        ?>
