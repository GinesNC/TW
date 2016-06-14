
<?php


        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $nombre=$_POST['nombre'];
            $apellidos=$_POST['apellidos'];
            $dni=$_POST['dni'];
            $correo=$_POST['correo'];
            $priv_admin=$_POST['priv_admin'];
            $id=$_POST['id'];
            $user=$_POST['id'];
            $passwd=$_POST['id'];
            /*$passwd='<script type="text/javascript">
              var aux=generarContr(8);
              document.write(aux);
              </script>';
              //$passwd="clave";*/

          mysqli_query($link,"INSERT INTO usuarios VALUES ('$nombre', '$apellidos', '$dni', '$correo', $priv_admin, '$user', '$passwd','$id')") or die ("Error al dar de alta al usuario!!");

            echo '<h2> Registro completo </h2> <a href="/TW/practica/index.html">Volver a la pagina de inicio.</a>'
            ;

        ?>
