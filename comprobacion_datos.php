<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $usuario=$_POST['nombreUsuario'];
            $contrasena=$_POST['contrasena'];

            $sql = "SELECT user,passwd,priv_admin FROM usuarios WHERE user='$usuario' and passwd='$contrasena'";
            $result = $link->query($sql);


            if ($result->num_rows > 0) {
                while($row = $result->fetch_assoc()) {
                    if ($usuario == $row["user"] && $contrasena == $row["passwd"]) {
                        if($row["priv_admin"] == 1)
                          header('Location: /TW/practica/registrado_admin.html');
                        else header('Location: /TW/practica/registrado.html');
                      }
            }
          }

              else
                echo "error acceso";

$link->close();

        ?>
