<?php


        //conexión base de datos.
        $link = mysqli_connect("localhost","ejercicio_pw","pass_ejercicio_pw") or die("<h2>No se encuentra el servidor</h2>");
        $db=mysqli_select_db($link,"75932436y") or die ("<h2>Error de conexion</h2>");
            $id=$_POST['id'];

            //delete from
            $sql="SELECT * from usuarios WHERE id='$id'";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
                mysqli_query($link," DELETE FROM usuarios WHERE id='$id' ") ;
                echo '<div style="text-align:center">
                <h2> Borrado con éxito </h2> <a href="../index.php?secc=eliminarUsuario">Volver a la pagina anterior.</a></div>';
              }
            else echo '<div style="text-align:center">
              <h2> Error al borrar el usuario, no existe. </h2> <a href="../index.php?secc=eliminarUsuario">Volver a la pagina anterior.</a></div>';
              $link->close();
        ?>
