<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            session_start();

            $usuario=$_POST['nombreUsuario'];
            $contrasena=$_POST['contrasena'];

            $sql = "SELECT * FROM usuarios WHERE user='$usuario' and passwd='$contrasena'";
            $result = $link->query($sql);

            if ($result->num_rows > 0) {
                    while ($row = $result->fetch_assoc()){
                    if ($usuario == $row["user"] && $contrasena == $row["passwd"]) {

                          $_SESSION['nombre']=$row["nombre"];
                          $_SESSION['email']=$row["correo"];
                          $_SESSION['dni']=$row["dni"];
                          $_SESSION['priv_admin']=$row['priv_admin'];
                          $_SESSION['id']=$row['id'];
                          $_SESSION['logueado']=true;
                          $_SESSION['error'] = "";
                          $_SESSION['ultimoAcceso']= time();
                          header('Location: /TW/practica/index.php?secc=usuario');

                      }


              }
            }
              else {
                $_SESSION['error'] = "Usuario o contraseña incorrectos.";
                header('Location: /TW/practica/index.php?secc=index');
              }




            $link->close();

        ?>
