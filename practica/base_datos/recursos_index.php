<?php
        //conexión base de datos.
            $link = mysqli_connect("localhost","root","puen20") or die("<h2>No se encuentra el servidor</h2>");
            $db=mysqli_select_db($link,"tw_practica") or die ("<h2>Error de conexion</h2>");



            //$sql = "SHOW TABLES";

          $sql = "SELECT * from recursos_activos";
          $result = $link->query($sql);

          if ($result->num_rows > 0) {
            while ($row = $result->fetch_assoc()) {
             echo "id: " . $row["id"]. " - fecha: " . $row["fecha"]. " " . " - nombre: " . $row["nombre"]. " " . "<br>";

          }




        } else {
    echo "0 results";
}

      // output data of each row

          //echo $sql;


    //  echo "0 results";
    $link->close();

        ?>
