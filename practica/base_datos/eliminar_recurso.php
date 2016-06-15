<?php
        //conexión base de datos.
        $link = mysqli_connect("localhost","ejercicio_pw","pass_ejercicio_pw") or die("<h2>No se encuentra el servidor</h2>");
        $db=mysqli_select_db($link,"75932436y") or die ("<h2>Error de conexion</h2>");
            $id=$_POST['id'];


            //hacer comprobacion de si existe o no los datos

            $sql="SELECT * from recursos_activos WHERE id='$id'";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
              mysqli_query($link,"DROP TABLE $id") or die ("<h2>Error borrando la tabla del recurso......</h2>");

              mysqli_query($link,"DELETE FROM recursos_activos WHERE id='$id'") or die ("<h2>Error borrando registro del recurso......</h2>");
               echo '<div style="text-align:center">
              <h2> El recurso se ha eliminado correctamente. </h2> <a href="../index.php?secc=finalizar_recurso">Volver a la pagina anterior.</a></div>';
                }
            else{

              echo '<div style="text-align:center">
              <h2> ERROR: NO existe el recurso. </h2> <a href="../index.php?secc=finalizar_recurso">Volver a la pagina anterior.</a></div>';

              }

            $link->close();

        ?>
