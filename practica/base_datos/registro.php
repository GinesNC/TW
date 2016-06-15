
<?php


        //conexión base de datos.
        $link = mysqli_connect("localhost","ejercicio_pw","pass_ejercicio_pw") or die("<h2>No se encuentra el servidor</h2>");
        $db=mysqli_select_db($link,"75932436y") or die ("<h2>Error de conexion</h2>");
            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $dni=$_POST['dni'];
            $correo=$_POST['correo'];
            $priv_admin=$_POST['priv_admin'];
            $id=$_POST['id'];
            $user=$_POST['id'];
            $passwd = substr( md5(microtime()), 1, 8);

            $sql="SELECT * from usuarios WHERE correo='$correo' or dni='$dni'";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
                echo '<div style="text-align:center">
                <h2> ERROR: El usuario ya existe. Correo o dni registrado ya. </h2> <a href="../index.php?secc=registro">Volver a la pagina anterior.</a></div>';
              }
            else{
              mysqli_query($link,"INSERT INTO usuarios VALUES ('$nombre', '$apellidos', '$dni', '$correo', $priv_admin, '$user', '$passwd','$id')");
               echo '<div style="text-align:center">
              <h2> Registro completado </h2> <a href="../index.php?secc=registro">Volver a la pagina anterior.</a></div>';
            }
              $link->close();





        ?>
