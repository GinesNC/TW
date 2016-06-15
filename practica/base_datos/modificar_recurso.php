<?php
    session_start();

        //conexión base de datos.
        $link = mysqli_connect("localhost","ejercicio_pw","pass_ejercicio_pw") or die("<h2>No se encuentra el servidor</h2>");
        $db=mysqli_select_db($link,"75932436y") or die ("<h2>Error de conexion</h2>");
            $nombre=$_POST['nombreRecurso'];
            $fecha=$_POST['fecha'];
            $hinicio=$_POST['hinicio'];
            $hfin=$_POST['hfin'];

            $despacho=$_POST['despacho'];
            $id=$_POST['id'];


            if($_SESSION['priv_admin']){
              $id_prof=$_POST['id_prof'];
            }
            else{
              $id_prof=$_SESSION['id'];
            }



              $sql="SELECT * from recursos_activos WHERE id='$id' and id_prof='$id_prof'";
              $result = $link->query($sql);
              if ($result->num_rows > 0) {
                mysqli_query($link," UPDATE recursos_activos SET nombre='$nombre',fecha='$fecha',hora_inicio='$hinicio', hora_fin='$hfin', id='$id',despacho='$despacho', id_prof='$id_prof' WHERE id='$id' and id_prof='$id_prof'");
                  echo '<div style="text-align:center">
                  <h2> Modificado con éxito </h2> <a href="../index.php?secc=modificarRecurso">Volver a la pagina anterior.</a></div>';
                }
              else echo '<div style="text-align:center">
                <h2> Error al modificar datos, no existe el recurso. </h2> <a href="../index.php?secc=modificarRecurso">Volver a la pagina anterior.</a></div>';

                $link->close();

        ?>
