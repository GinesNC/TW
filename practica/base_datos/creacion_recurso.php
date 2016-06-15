<?php
        //conexión base de datos.
        session_start();
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");

            $nombreRecurso=$_POST['nombreRecurso'];
            $fecha=$_POST['fecha'];
            $hora_inicio=$_POST['hinicio'];
            $hora_fin=$_POST['hfin'];
            $desp=$_POST['despacho'];
            $id=$_POST['id'];
            $id_prof=$_SESSION['id'];

            $sql="SELECT * from recursos_activos WHERE id='$id'";
            $result = $link->query($sql);
            if ($result->num_rows > 0) {
                echo '<div style="text-align:center">
                <h2> ERROR: Ya existe el recurso. </h2> <a href="../index.php?secc=crear_recurso">Volver a la pagina anterior.</a></div>';
              }
            else{
              mysqli_query($link,"CREATE TABLE $id(nombre varchar(30), dni varchar(9))") or die ("<h2>Error......</h2>");

              mysqli_query($link,"INSERT INTO recursos_activos VALUES ('$nombreRecurso', '$fecha', '$hora_inicio', '$hora_fin', '$id','$desp','$id_prof')") or die ("Error al insertar recurso");
               echo '<div style="text-align:center">
              <h2> El recurso se ha creado con exito. </h2> <a href="../index.php?secc=crear_recurso">Volver a la pagina anterior.</a></div>';
            }

            $link->close();
        ?>
