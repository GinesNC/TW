<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            session_start();

            $usuario=$_POST['nombreUsuario'];
            $contrasena=$_POST['contrasena'];

            $sql = "SELECT user,passwd,priv_admin FROM usuarios WHERE user='$usuario' and passwd='$contrasena'";
            $result = $link->query($sql);


            if ($result->num_rows > 0) {
                    $row = $result->fetch_array(MYSQLI_ASSOC);
                    if ($usuario == $row["user"] && $contrasena == $row["passwd"]) {
                        if($row["priv_admin"] == 1){
                          $_SESSION['nombre']=$row['nombre'];
                          $_SESSION['email']=$row['correo'];
                          $_SESSION['dni']=$row['dni'];
                          $_SESSION['priv_admin']=$row['priv_admin'];
                          $_SESSION['logueado']=true;
                          $_SESSION['error'] = "";

                          header('Location: /TW/practica/index.php?secc=administrador');
                        }
                        else{
                          $_SESSION['nombre']=$row['nombre'];
                          $_SESSION['email']=$row['correo'];
                          $_SESSION['dni']=$row['dni'];
                          $_SESSION['priv_admin']=$row['priv_admin'];
                          $_SESSION['logueado']=true;
                          $_SESSION['error'] = "";

                          header('Location: /TW/practica/index.php?secc=profesional');
                        }
                      }
                    else {
                      $_SESSION['error'] = "Usuario o contraseña incorrectos.";
                      header('Location: /TW/practica/index.php?secc=index');
                    }


              else
                echo "error acceso";



            $link->close();

        ?>
